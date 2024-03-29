function postNavegation(postContent, navegationBoard, $) {
    if (postContent) {
        let postTitles = $(postContent).children('h2');
        let postNavegation = $(".post-navegation");

        postNavegation.hide();

        if(postTitles && postTitles.length > 0) {
            jQuery.each(postTitles, (index, item) => {
                let listItem = $('<li/>');
                let link = $('<a/>');
                link.text(item.innerText);
                link.attr('href', '#' + item.id);
                link.attr('target', '_self');
                listItem.append(link);

                if(navegationBoard) {
                    $(navegationBoard).append(listItem);
                }
            });

            postNavegation.show();
        }
    }
}