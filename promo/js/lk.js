$(document).ready(function () {
    $('.lk-students-chat .chat').jScrollPane();
    //������������ ������� � online
    var countMess=$('.lk-students-chat').find('.chat-message').length;
    var forumId=$('.lk-students-chat .chat').data('fid');
    var topicId=$('.lk-students-chat .chat').data('chatid');
    var timerId = setInterval(function() {
        $.ajax({
            type: "POST",
            url: "/promo/ajax/chats.php",
            data: "count="+countMess+"&fid="+forumId+"&tid="+topicId,
            success: function(msg){
                var d=JSON.parse(msg);
                if(d.new_mess==0){
                    console.log('����� ��������� ���');
                }else{
                    $('.lk-students-chat #messges').html(d.html_mess);
                }
            }
        });
    }, 30000);
});
