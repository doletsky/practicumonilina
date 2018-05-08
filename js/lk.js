jQuery(function($) {
    $(document).ready(function(){

        $('#btn_form ').click(function(e){
            e.preventDefault();
            var data='';
            $(this).children('input').each(function(){
                data+=$(this).attr('name')+'='+$(this).attr('value')+'&'
            });
            $.ajax({
                type: "POST",
                url: '/ajax/auth.php',
                data: data,
                success: function (p) {
                    var an=JSON.parse(p);console.log(an);
                    if(an.success=='true'){
                        $('.mfp-bg').addClass('hidden');

                    };
                }
            });

        });

    });
});
