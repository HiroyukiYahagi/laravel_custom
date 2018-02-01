confirmDelete = function(event){
    event.preventDefault();
    UIkit.modal.confirm('本当に削除しますか？').then(function () {
       event.target.submit();
    }, function () {
    });
};


document.addEventListener('DOMContentLoaded', function() {
    
    $(document).on("keypress", "input:not(.allow_submit)", function(event) {
        return event.which !== 13;
    });

    const layzr = Layzr({
        normal: 'data-normal',
        threshold: 0
    });

    $('*[required]').each(function(index, el) {
        var name =     $(el).attr("name");
        $label = $(el).parents(".uk-form-controls").parent().children('label[for='+name+']');
        $label.text( $label.text() + "(必須)" );
    });

});