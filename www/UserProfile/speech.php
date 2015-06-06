
            <html>
                <head>
                    <title>Samantha</title>
                    
                    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/1.1.0/annyang.min.js"></script>
                    <script>
                        if (annyang) {
                            // Let's define our first command. First the text we expect, and then the function it should call
                            var commands = {
  // annyang will capture anything after a splat (*) and pass it to the function.
  // e.g. saying "Show me Batman and Robin" is the same as calling showFlickr('Batman and Robin');
  'play *term': playSong,

  // A named variable is a one word variable, that can fit anywhere in your command.
  // e.g. saying "calculate October stats" will call calculateStats('October');
  'calculate :month stats': calculateStats,

  // By defining a part of the following command as optional, annyang will respond to both:
  // "say hello to my little friend" as well as "say hello friend"
  'say hello (to my little) friend': greeting
};

                            var playSong = function(term) {
                               window.location.href = 'http://www.google.com/?q'+term;
                           }

                            var calculateStats = function(month) {
                                $('#stats').text('Statistics for '+month);
                            }

                            var greeting = function() {
                                $('#greeting').text('Hello!');
                            }
                            
                            // Start listening. You can call this here, or attach this call to an event, button, etc.
                            annyang.start();
    }
    </script>
    
                    
                    <link rel="stylesheet" href="speechstyle.css" />    
                </head>
                <body background = "bg.jpg">
                    <div id="container">
                                            <h1> <FONT color = #fff> Hey there, I'm Samantha. </FONT></h1>
    
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
    
                        
                    </div>
                </body>
            </html>
