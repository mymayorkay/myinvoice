<div class="footer">
    <div class="copyright">
        <p>© 2021 Invoice | All Right Reserved | Designed by <a href="https://mayorkay.com/" target="_blank">Mayorkay Technologies</a></p>
    </div>
</div>


<script type="text/javascript">
    function showTime() {
        var date = new Date();
        var h = date.getHours();
        var m = date.getMinutes();
        var s = date.getSeconds();

        var day = " AM";

        if(h == 0){
            h = 12;
        }

        if(h >= 12){
            h-=12;
            day = " PM";
        }

        document.getElementById('times').textContent = (" 0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2) + day;
    }
    setInterval(showTime, 1000);

    function secondTime() {
        var date = new Date();
        var h = date.getHours();
        var m = date.getMinutes();
        var s = date.getSeconds();

        var day = " AM";

        if(h == 0){
            h = 12;
        }

        if(h >= 12){
            h-=12;
            day = " PM";
        }

        document.getElementById('secondtimes').textContent = (" 0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2) + day;
    }
    setInterval(secondTime, 1000);
</script>