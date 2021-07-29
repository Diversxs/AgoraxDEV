<button onclick="topFunction()" class=" bg-red-500 hover:bg-redit -800 text-white text-sm  " id="myBtn"
    title="Go to top">🡩</button>
    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            cursor: pointer;
            width:40px;
            height: 40px;
        }

    </style>



    <script>
        
        var mybutton = document.getElementById("myBtn");
        
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>