<!DOCYPE html>
<html>
    <head>
        <title>Assignment 1</title>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <table border="1">
            <!-- For Loop for Table Rows -->
            <?php for ($tr = 1; $tr <= 10; $tr++): ?>
                <tr> 
                <!-- For Loop for Table Columns -->
                <?php for($td = 1; $td <= 10; $td++): ?>
                    <!-- Random Hex Value Function -->
                    <?php $randColor = '#'.strtoupper(dechex(rand(0x000000, 0xFFFFFF))); ?>
                    <td style="background-color:<?php echo $randColor; ?>"> <?php echo $randColor; ?> <br /><span style="color:#ffffff"> <?php echo $randColor; ?> </span></td>
                <?php endfor; ?>                
                </tr>
            <?php endfor; ?>
        </table>
    
    </body>
</html>