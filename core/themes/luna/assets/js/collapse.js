$toggel= false;

(function ($, Drupal) {

        $faq = $(".faq--title");
        $answer = $faq.next("article");
        $answer.css("visibility", "hidden");
        $answer.css("height", 0);

        $(".faq--title").click(function () {
            if($toggel){
                $faq = $(this);
                $answer = $faq.next("article");
                $answer.css("visibility", "hidden");
                $answer.css("height", 0);
            
                $toggel= false;
            }

            else{
                $faq = $(this);
                $answer = $faq.next("article");
                $answer.css("visibility", "visible");
                $answer.css("height", "fit-content");

                $toggel= true;
            }
        });
   
})(jQuery, Drupal);