var ClixxieUS = {
	saveVote: function(/*string*/vote)
	{
		$.ajax({
		  type: "POST",
		  url: "csp.php",
		  data: { vote: vote }
		})
		  .done(function( msg ) {
		    alert( "Thank You!\nYour vote has been saved: " + msg );
		  });
	},
	saveEmail: function(/*string*/email)
	{
		$.ajax({
		  type: "POST",
		  url: "csp.php",
		  data: { email: email }
		})
		  .done(function( msg ) {
		    alert( "Thank You!\nYour email address has been saved: " + msg );
		  });
	}
};
