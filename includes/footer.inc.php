		<!-- Footer -->
		<footer>
            <a href="#home" class="logo logo-main"><img src="images/logos/logo.svg" width="64" height="64" alt="<?php echo $lang['LOGO_ALT']; ?>"/></a>
            <p>Copyright © <span id="current-year">2019</span> - Pierre PRÉZELIN<br> <span>|</span> <a href="legalnotice.php" title="<?php echo $lang['LEGAL_NOTICE_TITLE']; ?>"><?php echo $lang['LEGAL_NOTICE']; ?></a> <span>|</span> <a href="changelog.php" title="ChangeLog">ChangeLog</a></p>
		</footer>

		<!-- Scripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"></script>
		<script src="scripts/vendors/strip.min.js"></script>
		<script src="scripts/common.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-75384335-1', 'auto');
            ga('require', 'linkid');
            ga('send', 'pageview');
        </script>
        <script>
            document.getElementById("current-year").innerHTML = new Date().getFullYear();
        </script>
    </body>
</html>