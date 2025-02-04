jQuery(document).ready(function($) {

    const searchTypeMap = {
        'search-searvice': 'services',
        'search-news': 'internationalpayment',
        'search-educational': 'training'
    };

    let searchTimeout;  // Variable to hold the timeout ID for debouncing

    function performSearch(query, isMobile) {
        let activeButton = $('.search-click.active-search').attr('id');
        let resultId = '';

        switch (activeButton) {
            case 'search-searvice':
                resultId = isMobile ? 'item-searvice_mobile' : 'item-searvice';
                break;
            case 'search-news':
                resultId = isMobile ? 'item-news_mobile' : 'item-news';
                break;
            case 'search-educational':
                resultId = isMobile ? 'item-educational_mobile' : 'item-educational';
                break;
        }

        // Check if resultId is valid
        if (resultId === '') {
            console.error("Invalid resultId. Make sure an active button is selected.");
            return;  // Exit if there's no valid resultId
        }

        // Check if the resultId element exists in the DOM
        let resultContainer = $('#' + resultId);
        if (resultContainer.length === 0) {
            console.error("No element found with the ID: #" + resultId);
            return;  // Exit if no container is found
        }

        // Hide all result sections and show only the current one
        $('.suggestion-search').addClass('hidden');
        resultContainer.removeClass('hidden');

        // Perform the AJAX request
        $.ajax({
            url: localdata.ajax_url, // Assuming WordPress AJAX handler
            type: 'POST',
            data: {
                action: 'perform_search',
                query: query,
                search_type: activeButton
            },
            success: function(response) {
                resultContainer.empty();  // Clear previous results

                if (response && response.length) {
                    response.forEach(item => {
                        resultContainer.append(`
                            <a href="${item.link}" class="flex items-center gap-4 mt-[17px]">
                                <div class="bg-dark-76 p-2 rounded-full">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8.824" cy="9.328" r="6.633" stroke="#585858" stroke-width="1.726" stroke-linecap="round" stroke-linejoin="round"></circle>
                                        <path d="m13.438 14.286 2.6 2.593" stroke="#585858" stroke-width="1.726" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <p>${item.title}</p>
                            </a>
                        `);
                    });
                } else {
                    resultContainer.append('<p>نتیجه‌ای یافت نشد.</p>');
                }
            }
        });
    }

    // Debounced function to handle the search
    function debouncedSearch(query, isMobile) {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(function() {
            performSearch(query, isMobile);
        }, 635);
    }

    $('#search-box input, #mobile-search-box input').on('keyup', function() {
        let query = $(this).val();
        let isMobile = $(this).closest('#mobile-search-box').length > 0;

        debouncedSearch(query, isMobile);
    });

    $('.search-click').on('click', function() {
        $('.search-click').removeClass('active-search');
        $(this).addClass('active-search');

        let query = $('#search-box input').val() || $('#mobile-search-box input').val();
        let isMobile = $('#mobile-search-box input').val() !== '';

        performSearch(query, isMobile);
    });

});





jQuery(document).ready(function($) {
    const $stars = $(".star");
    const $commentForm = $("#comment-form");
    const $ratingText = $("#rating-text");
    const $ratingInput = $("#rated_comment");
    let currentRating = 5; // Default rating

    // Function to update star visuals and rating value
    function updateStars(rating) {
        $stars.each(function(index) {
            $(this).find('path').attr('fill', index < rating ? '#FFCB05' : '#D9D9D9');
        });
        $ratingText.text(rating > 0 ? rating + ' ستاره' : '');
        $ratingInput.val(rating);
    }

    // Initialize the stars with the default rating
    updateStars(currentRating);

    // Add click event to each star for rating
    $stars.on("click", function() {
        currentRating = $(this).data("value");
        updateStars(currentRating);
    });

    // Unified form submission function
    $commentForm.on('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        let formData = $commentForm.serializeArray(); // Collect form data
        formData.push({ name: 'action', value: 'submit_comment_action' }); // Append action

        // Append nonce from localized script
        if (typeof wpAjax.nonce !== 'undefined') {
            formData.push({ name: '_wpnonce', value: wpAjax.nonce });
        } else {
            console.error("Nonce is undefined. Please check if wp_localize_script is correctly outputting the nonce.");
            return; // Exit if the nonce is undefined
        }

        // Manually append comment-text if not captured
        var commentText = $("#comment").val();
        if (commentText) {
            formData.push({ name: 'comment_text', value: commentText });
        }

        // Send AJAX request
        $.ajax({
            url: wpAjax.ajax_url,
            type: 'POST',
            data: formData,
            success: function(data) {
                if (data.success) {
                    $('#comment_submit_result').text('نظر شما با موفقیت ثبت شد و پس از تایید نمایش داده می‌شود.');
                    $commentForm[0].reset(); // Clear the form
                    updateStars(0); // Reset star rating after submission
                } else {
                    $('#comment_submit_result').text(data.data.error || 'An error occurred. Please try again.');
                }
            },
            error: function() {
                $('#comment_submit_result').text('در ارسال فرم مشکلی رخ داد');
            }
        });
    });

    // Toggle comment form visibility if needed
    $('#add-comment-btn').on('click', function() {
        $commentForm.toggle();
    });

    // Voting functionality
    $('.upvote, .downvote').on('click', function() {
        const commentId = $(this).data('comment-id');
        const voteType = $(this).hasClass('upvote') ? 'up' : 'down';

        $.ajax({
            url: wpAjax.ajax_url,
            type: 'POST',
            data: {
                action: 'vote_comment',
                comment_id: commentId,
                vote_type: voteType,
                nonce: $('#comment_nonce_field').val()
            },
            success: function(response) {
                if (!response.success) {
                    alert('خطا در ثبت رای. لطفا دوباره تلاش کنید.');
                }
            }
        });
    });

    // Bind reply button functionality
    $('.reply-btn').on('click', function() {
        const commentId = $(this).data('comment-id');
        $('input[name="parent_id"]').val(commentId);
        $commentForm.insertAfter($(this).closest('.comment-wrapper')).show();
    });



    // Comment Modal Start
  $(".comment-modal").click(function () {
    if (window.innerWidth < 720) {
      $("#modal-mobile-container").css("transform", "translateY(100%)");
    }
    $(".comment-modal").addClass("hidden");
  });
  $(".close-comment-modal").click(function () {
    if (window.innerWidth < 720) {
      $("#modal-mobile-container").css("transform", "translateY(100%)");
    }
    $(".comment-modal").addClass("hidden");
  });
  $(".open-modal-comment").click(function () {
    if (window.innerWidth < 720) {
      $("#modal-mobile-container").css("transform", "translateY(0)");
      $("#modal-backdrop").removeClass("hidden");
    } else {
      $(".comment-modal").removeClass("hidden");
    }
  });
  $(".content-comment-modal").click(function (e) {
    e.stopPropagation();
  });
  // Comment Modal End
});
