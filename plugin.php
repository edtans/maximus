<div class="section">
    <h1>Login</h1>
    <!-- <form action="xsearch.asp"> -->
    <table border="0">
        <tr>
            <td>Username</td>
            <td><input type="text" name="fuser" id="id_user" value="edo"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="fpass" id="id_pass" value="edo"></td>
        </tr>
    </table>
    <input type="submit" value="Submit" onclick="myFunction()">
    <br/>
    <!-- </form> -->
</div>

<script type="text/javascript">
    function myFunction()
    {
        var vuser = document.getElementById("id_user").value;
        var vpass = document.getElementById("id_pass").value;

        var API_URL = 'https://hf34eyodk4.execute-api.us-east-1.amazonaws.com/prod_max/';

        $(document).ready(function()
        {
            $.ajax({
                type: 'GET',
                url: API_URL,
                
                success: function(data){

                    var check_username = 0;
                    var check_password = 0;

                    var temp_user = '';
                    var temp_pass = '';
                    
                    $.each(data.Items, function (i)
                    {
                        $.each(data.Items[i], function (key, val)
                        {
                            if (key == 'username')
                            {
                                if (val == vuser)
                                {
                                    check_username = 1;
                                    temp_user = val;
                                }
                            }
                        });

                        $.each(data.Items[i], function (key, val)
                        {
                            if (key == 'password' && check_username == 1)
                            {
                                if (val == vpass)
                                {
                                    check_password = 1;
                                    temp_pass = val;
                                }
                            }               
                        });
                    });

                    console.log(temp_user + ' ' + temp_pass);

                    if (check_username == 1 && check_password == 1)
                    {
                        alert("OK");
                    }
                    else
                    {
                        alert("cancel");    
                    }
                },
                error: function(XX)
                {
                    alert('Failure');
                }
            });
        });
    }
</script>

<div class="section">
     <table align="center">
        <tr>
            <td colspan="2" align="center">
                <a href="http://www.livehelpnow.net/lhn/lcv.aspx?d=4164&ms=&zzwindow=0&lhnid=4696" target="_blank">
                    <img src="images/lhn_first_online.gif" />
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a href="https://seal.godaddy.com/verifySeal?sealID=jyK01WGwoHcUSqIC2IkbhVxYhX4B9Du9K9DXX8cVLbzXQ7vZuYfZXUD" target="_blank">
                    <img src="images/siteseal_gd_3_h_l_m.gif" />
                </a>
            </td>
        </tr>
        <tr>
            <td align="center">
                <a href="https://www.mcafeesecure.com/RatingVerify?ref=www.maximuscards.com" target="_blank">
                    <img src="images/13.gif" />
                </a>
            </td>
            <td>
                <a href="https://sealserver.trustwave.com/cert.php?customerId=87400a680ca511e0b34b005056b201e5&size=105x54&style=" target="_blank">
                    <img src="images/TrustWave.png" width="90" />
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="https://www.facebook.com/mymaximuscards/" target="_blank">
                    <img src="images/FB_Review.jpg" />
                </a>
            </td>
        </tr>
     </table>
</div>