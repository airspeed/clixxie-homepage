var ClixxieCSP = {
	saveVote: function(/*string*/vote, /*void(^)(string)*/callback)
	{
		$.ajax({
		  type: "POST",
		  url: "csp.php",
		  data: { vote: vote }
		})
		  .done(function( msg ) {
			callback( msg );
		  });
	},
	saveEmail: function(/*string*/email, /*void(^)(string)*/callback)
	{
		$.ajax({
		  type: "POST",
		  url: "csp.php",
		  data: { email: email }
		})
		  .done(function( msg ) {
			callback( msg );
		  });
	}
};
