$(document).ready(function () {
    var el=$('.lk-students-chat .chat').jScrollPane();
    var api = el.data('jsp');
    api.scrollToBottom('slow');

    var countMess=0;
    var forumId=$('.lk-students-chat .chat').data('fid');
    var topicId=$('.lk-students-chat .chat').data('chatid');

    // $('#REPLIER').submit(function (elem) {
    //     defi
    // });

    function controlAddMess(tid) {
        countMess=$('.lk-students-chat').find('.chat-message').length;
        $.ajax({
            type: "POST",
            url: "/promo/ajax/chats.php",
            data: "count="+countMess+"&fid="+forumId+"&tid="+topicId,
            success: function(msg){
                var d=JSON.parse(msg);
                if(d.new_mess==0){
                    //console.log('новых сообщений нет');
                }else{
                    $('.lk-students-chat').find('#messages').html('');
                    var mh='';
                    var armess=d.html_mess;
                    for(var m in armess){
                        mh+='<div class="chat-message col-md-12">';
                        mh+='<div class="reviews-text '+armess[m].me+'" id="message_text_'+armess[m].id+'">';
                        mh+='<div class="chat-message-author col-md-12">';
                        mh+=armess[m].author+'<span class="message-post-date">'+armess[m].data+'</span></div>';
                        mh+=armess[m].post+'</div></div>';
                        $('.lk-students-chat').find('#messages').append(mh);
                        mh='';
                    }

                    setTimeout(function () {
                        el=$('.lk-students-chat .chat').jScrollPane({autoReinitialise: true});
                        api = el.data('jsp');
                        api.scrollToBottom('slow');
                    },500);
                }
            }
        });
    }

    //отслеживание ответов в online
    var timerId = setInterval(function() {
        controlAddMess(topicId);
    }, 30000);
});

