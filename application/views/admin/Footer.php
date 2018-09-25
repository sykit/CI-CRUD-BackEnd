
</div>
</div>
</div>

</body>
<script>
    var time_out_alert ;
    $(document).ready(function () {
        $('#table').DataTable();
        time_out_alert = setTimeout(function(){ 
             $('.alert').fadeOut("slow");
        }, 3000);
    });
    $('.close_alert').on("click", function () {
        alert('aa')
        if(time_out_alert != undefined){
            clearTimeout(time_out_alert);
        }
        $('.alert').fadeOut("slow");
    });
</script>
</html>