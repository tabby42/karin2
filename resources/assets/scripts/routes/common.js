export default {
  init() {
    // JavaScript to be fired on all pages
    var eventSummary = $("article.type-event .entry-summary"),
        //blogMore = $('.btn.btn-details.blog-more'),
        btnDetail = $(".btn.btn-details:not(blog-more)");

    eventSummary.hide();
    //blogMore.hide();

    btnDetail.on("click", function() {
      $(this).parent().parent().find(".entry-summary").slideToggle(500);
    });
    
   /*  blogMore.on("click", function() {
      $(this).parent().parent().find(".entry-summary").slideToggle(500);
    }); */

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
