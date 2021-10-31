<HTML !doctype>
    <html>
        <head>
            <style>#customers td, #customers th {border: 1px solid #ddd;padding: 8px;}
            </style></head>
            <body>
                <?php if(empty($user)){?>
                <p>Dear User Thanks For Subscribe</p>
                <?php }else{?>
                <p>Dear Admin</p>
                <p>Subscription list</p>
                <?php }?>
                <table id="customers">
                    <thead><tr><td>Email</td>
                    </tr></thead><tbody><tr><td><?php echo $email; ?></td>
                    </tr></tbody></table>
                    </body></html>