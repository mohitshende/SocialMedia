<?php
// include "post.php";

$sql="SELECT * FROM `$set`";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num>0){
    while($fetch=mysqli_fetch_assoc($result)){

        echo '<div class="container col-md-6 text-gray-600 body-font px-6">
        <div class="w-full lg:w-full md:px-4 lg:px-6 py-10">
            <div class="bg-white shadow-xl">
                <div class="px-4 py-4 md:px-10">
                    <h1 class="font-bold text-lg">UI,UX Concepts</h1>
                    <p class="py-4">'.$fetch["message"].'

                    </p>
                    <div class="flex flex-wrap pt-8">
                        <div class="w-full md:w-1/3 text-sm font-medium">
                        '.$fetch["time"].'
                        </div>
                        <div class="2/3">
                            <div class="text-sm font-medium">
                                SHARE:
                                <a href="" class="text-blue-700 px-1"> FACEBOOk </a>
                                <a href="" class="text-blue-500 px-1"> TWITTER </a>
                                <a href="" class="text-red-600 px-1"> GOOGLE+ </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';

        // echo "";
        // echo "";
        // echo "<div class=>Time :- ".;
        // echo "<br>";
        // echo "<br>";

    }
}
else{
    echo "<h2>No Posts To Display</h2>";
}

?>