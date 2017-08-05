$(function(){
        $('ul.sidebar-nav-cont > li > a').on('click',function(e) {
            e.preventDefault();
        	$('.sidebar-nav-cont li').removeClass('active');
            $(this).closest('li').addClass('active');	
            var checkElement = $(this).next();
            if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                $(this).closest('li').removeClass('active');
                checkElement.slideUp('normal');
            }
            if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $('ul.sidebar-nav-cont ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
            }
            if($(this).closest('li').find('ul').children().length == 0) {
                return true;
            } else {
                return false;	
            }
        });

        $('#sidebar-toggle-btn').on('click', function(e){
            e.preventDefault()
            $('.sidebar').toggleClass('open')
        })

        $('#dt').DataTable();

        $('#modal-call').on('click', function(e){
            e.preventDefault()
            console.log('JOe')
            $('ui.modal').modal();
        })
    })

    