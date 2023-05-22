jQuery(document).ready(function($){
  $('#portfolio-form').on('submit', function(e) {
    e.preventDefault();

    const ourNewPortfolio = {
      "title": $("#email").val(),
      "content": $("#comment").val(),
      "status": "publish",
      "acf": {
        "email": $("#email").val(),
        "comment": $("#comment").val(),
        "post_id": $("#post_id").val()
      },
    }

    $.ajax({
      beforeSend: xhr => {
        xhr.setRequestHeader("X-WP-Nonce", bgdata.nonce)
      },
      url: bgdata.root_url + "/wp-json/wp/v2/portfolio/",
      type: "POST",
      data: ourNewPortfolio,
      success: response => {
        $("#email, #comment, #post_id").val("");
        console.log("Congrats")
        console.log(response)
      },
      error: response => {
        console.log("Sorry")
        console.log(response)
      }
    });
  })
}) 