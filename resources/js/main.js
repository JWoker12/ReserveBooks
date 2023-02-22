$(document).ready(function(){
    $('#category').on('change', function(){
        var category = $(this).val();
        var token = $('input[name=_token]').val();
        $.ajax({
            url: '/books',
            type: 'GET',
            data : {
                category : category,
                _token: _token
            },
            success: function(data){
                var books = data.books;
                html = '';
                if(books.length > 0){
                    
                }
            }

        })
    })
})