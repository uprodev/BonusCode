(function($){
    $(document).ready(function(){

        // On category change
        $('select[name="acf[field_66d6ac690a4b5][66d6b102c410d][field_66d6ae900a4b6]"]').on('change', function(){
            var selectedCategory = $(this).val();
            var relationshipField = $('select[name="acf[field_{field_66d6aef40a4b7}]"]');

            // Clear existing options
            relationshipField.find('option').remove();

            // Make an AJAX request to get posts from the selected category
            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'filter_relationship_by_category',
                    category: selectedCategory
                },
                success: function(response) {
                    var posts = JSON.parse(response);
                    $.each(posts, function(index, post) {
                        relationshipField.append('<option value="'+post.id+'">'+post.title+'</option>');
                    });
                }
            });

        });

    });
})(jQuery);
