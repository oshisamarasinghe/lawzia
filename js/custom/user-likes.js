/**
 * Created by oshadi on 5/10/2018.
 */
function liked(answerId) {

    var anID = answerId;
    var clickedIcon = $('#Like');
    var nextIcon=$('#like')

    $.ajax({
        dataType:'json',
        url: 'vote.php' ,
        type: 'post',
        data: {
            'liked': 1,
            'postid': anID

        },
        success: function (results) {


            alert(results.likes);

            clickedIcon.removeClass();
            clickedIcon.addClass('mdi-action-thumb-up teal-text');
            nextIcon.val(results.likes);

           // clickedIcon.siblings('span.likes').text(results.likes);



        },
        error: function () {

        }
    });
}

function unLiked(answerId) {
    var anID = answerId;
    var clickedIcon = $('#Unlike');
    alert("i m here to unlike" + anID);

    $.ajax({
        dataType:'json',
        url: 'vote.php',
        type: 'post',
        data: {
            'unLiked': 1,
            'postid': anID
        },
        success: function () {
            clickedIcon.removeClass();
            clickedIcon.addClass('mdi-action-thumb-down teal-text');
            alert("unlike successful ");
        },
        error: function () {
            alert("unlike error");
        }
    });

}
function like_to_unlike(answerId) {

    var anID = answerId;
    var clickedIcon=$('#Dislike');
    var currentIcon=$('#liked');
    alert("like -> unlike" + anID);
    $.ajax({
        url: 'vote.php?like_unlike=' + 1 + '&postID=' + anID + '',
        type: 'post',
        data: {
            'like_unlike': 1,
            'postID': anID
        },
        success: function () {
            currentIcon.removeClass();
            currentIcon.addClass('mdi-action-thumb-up grey-text');
            clickedIcon.removeClass();
            clickedIcon.addClass('mdi-action-thumb-down teal-text');
            alert("like-> unlike successful");
        },
        error: function () {
            alert("like-> unlike error");
        }
    });
}
function unlike_to_like(answerId) {
    var anID = answerId;
    var clickedIcon=$('#unDislike');
    var currentIcon=$('#unliked');

    alert("unlike -> like" + anID);
    $.ajax({
        url: 'vote.php?unlike_like=' + 1 + '&postID=' + anID + '',
        type: 'post',
        data: {
            'unlike_like': 1,
            'postID': anID
        },
        success: function () {
            currentIcon.removeClass();
            currentIcon.addClass('mdi-action-thumb-down grey-text');
            clickedIcon.removeClass();
            clickedIcon.addClass('mdi-action-thumb-up teal-text');
            alert("unlike-> like successful ");
        },
        error: function () {
            alert("unlike-> like error");
        }
    });

}