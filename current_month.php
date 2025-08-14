<html>
    <body>
        <?php
            $m= date('n');

            if($m==1)
            {
                echo "january <br>";
            }
            else if($m==2)
            {
                echo "february <br>";
            }
            else if($m==3)
            {
                echo "march <br>";
            }

            else if($m==4)
            {
                echo "april <br>";
            }

            else if($m==5)
            {
                echo "may <br>";
            }

            else if($m==6)
            {
                echo "june <br>";
            }
             else if($m==7)
            {
                echo "july <br>";
            }
             else if($m==8)
            {
                echo "august <br>";
            }
             else if($m==9)
            {
                echo "september <br>";
            }
             else if($m==10)
            {
                echo "october <br>";
            }
             else if($m==11)
            {
                echo "november <br>";
            }
            else if($m==12)
            {
                echo "desember <br>";
            }
            else{
                echo "invalid month";
            }


            echo "using switch case <br>";
            switch($m)
            {
                case'1':
                    echo "january";
                    break;
                
                case'2':
                    echo "february";
                    break;

                case'3':
                    echo "march";
                    break;

                case'4':
                    echo "april";
                    break;

                case'5':
                    echo "may";
                    break;

                case'6':
                    echo "june";
                    break;
                case'7':
                    echo "july";
                    break;
                 case'8':
                    echo "august";
                    break;
                 case'9':
                    echo "september";
                    break;
                 case'10':
                    echo "october";
                    break;
                 case'11':
                    echo "november";
                    break;
                 case'12':
                    echo "december";
                    break;
            
                default:
                echo "invalid month";
                    break;
            }
            ?>
    </body>
</html>
