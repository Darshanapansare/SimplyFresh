$(function () {
    const video = document.getElementById("video");
    const circlePlayButton = document.getElementById("circle-play-b");

    function togglePlay() {
        if (video.paused || video.ended) {
            video.play();
        } else {
            video.pause();
        }
    }

    circlePlayButton.addEventListener("click", togglePlay);
    video.addEventListener("playing", function () {
        circlePlayButton.style.opacity = 0;
    });
    video.addEventListener("pause", function () {
        circlePlayButton.style.opacity = 1;
    });

});

// back to top code

var btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});

// Hide and show content
// function showHide(shID) {
//     if (document.getElementById(shID)) {
//         const content = $('#' + shID);
//         const showLink = $('#' + shID + '-show');
//         const hideLink = $('#' + shID + '-hide');

//         if (showLink.is(':visible')) {
//             showLink.hide();
//             content.fadeIn(500);
//             hideLink.show();
//         } else {
//             content.fadeOut(500, function () {
//                 showLink.show();
//                 hideLink.hide();
//             });
//         }
//     }
// }
function toggleContent(divID) {
    const content = document.getElementById(divID);
    const showLink = document.getElementById(divID + '-show');
    const hideLink = document.getElementById(divID + '-hide');

    if (!content.classList.contains('show')) {
        // Expand content
        content.classList.add('show');
        content.style.display = 'block'; // Ensure visibility
        showLink.style.display = 'none';
        hideLink.style.display = 'inline';

        // Smooth scroll to content
        content.scrollIntoView({ behavior: 'smooth', block: 'start' });
    } else {
        // Collapse content
        content.classList.remove('show');
        content.style.display = 'none';
        showLink.style.display = 'inline';
        hideLink.style.display = 'none';

        // Scroll back to the "Show More" link
        showLink.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
}



function showHide2(shID) {
    if (document.getElementById(shID)) {
        const content = $('#' + shID);
        const showLink = $('#' + shID + '-show');
        const hideLink = $('#' + shID + '-hide');

        if (showLink.is(':visible')) {
            // Hide "Show More" link, fade in content
            showLink.hide();
            content.fadeIn(500);
            hideLink.show();
        } else {
            // Hide the content, show "Show More" link
            content.fadeOut(500, function () {
                showLink.show();
                hideLink.hide();
            });
        }
    }
}


// function showHide2(shID2) {
//     if (document.getElementById(shID2)) {
//         if (document.getElementById(shID2 + '-show').style.display != 'none') {
//             document.getElementById(shID2 + '-show').style.display = 'none';
//             document.getElementById(shID2).style.display = 'block';
//         }
//         else {
//             document.getElementById(shID2 + '-show').style.display = 'inline';
//             document.getElementById(shID2).style.display = 'none';
//         }
//     }
// }

// Home Page Banner carousel

/*
inspiration
https://cz.pinterest.com/pin/830703093790696716/
*/
