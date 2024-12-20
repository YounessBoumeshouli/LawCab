<?php
ob_start();

?>

<div class="flex items-center justify-center">
    <div class="bg-white w-1/3 mt-10 rounded-lg">
        <div class="flex items-center justify-center pt-10 flex-col">
            <img src="https://i.pinimg.com/originals/a8/bc/90/a8bc90ea196737604770aaf9c2d56a51.jpg"
                class="rounded-full w-32">
            <h1 class="text-gray-800 font-semibold text-xl mt-5"><?=$result["full_name"]?></h1>
            <h1 class="text-gray-500 text-sm"><?=$result["email"]?></h>
                <h1 class="text-gray-500 text-sm p-4 text-center">
                    <?=$result["label"]?>
                </h1>
        </div>
        <div>
         <label for="biography">
            <input type="text" placeholder="your bio" value="<?php
            if($result["biography"]){
               echo $result["biography"];
            }
            ?>">
         </label>
        </div>
        <div class="flex justify-between p-4">
            <div>
                <h1 class="text-xs uppercase text-gray-500">Membership</h1>
                <h1 class="text-xs text-yellow-500">Gold Member</h>
            </div>
            <div>
                <button class="text-xs text-green-300 border-2 py-1 px-2 border-green-300">Renew</button>
            </div>
        </div>
        <div class="flex items-center justify-center mt-3 mb-6 flex-col">
            <h1 class="text-xs text-gray-500">Get Connected</h1>
            <div class="flex mt-2">
                <img src="https://www.iconsdb.com/icons/preview/gray/facebook-xxl.png" alt=""
                    class="w-6 border-2 p-1 rounded-full mr-3">
                <img src="https://www.iconsdb.com/icons/preview/gray/twitter-xxl.png" alt=""
                    class="w-6 border-2 p-1 rounded-full mr-3">
                <img src="https://www.iconsdb.com/icons/preview/gray/google-plus-xxl.png" alt=""
                    class="w-6 border-2 p-1 rounded-full mr-3">
                <img src="https://www.iconsdb.com/icons/preview/gray/instagram-6-xxl.png" alt=""
                    class="w-6 border-2 p-1 rounded-full">
            </div>
        </div>
        <div class="flex justify-between pb-4">
            <div class="-rotate-90 cursor-pointer">
                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.001 6L6.00098 1L1.00098 6" stroke="black" stroke-opacity="0.4" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <span class="uppercase text-sm font-semibold text-gray-600">january - 2022</span>
            <div class="rotate-90 cursor-pointer">
                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.001 6L6.00098 1L1.00098 6" stroke="black" stroke-opacity="0.4" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

        </div>
   <form method="post" action="index.php?action=updateDisponibility">
        <table class="table-auto border-collapse border border-gray-300 w-full text-center">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 py-2">Sunday</th>
                    <th class="border border-gray-300 py-2">Monday</th>
                    <th class="border border-gray-300 py-2">Tuesday</th>
                    <th class="border border-gray-300 py-2">Wednesday</th>
                    <th class="border border-gray-300 py-2">Thursday</th>
                    <th class="border border-gray-300 py-2">Friday</th>
                    <th class="border border-gray-300 py-2">Saturday</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $unavailableRanges = [];
                while ($row = $result1->fetch()) {
                    $unavailableRanges[] = [
                        'start' => new DateTime($row["datedebut"]),
                        'end' => new DateTime($row["datefin"])
                    ];
                }

                $year = date('Y'); 
                $month = date('m'); 
                $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year); 
                $firstDayOfMonth = date('w', strtotime("$year-$month-01")); 

                $currentDay = 1;
                echo "<tr>";

                for ($i = 0; $i < $firstDayOfMonth; $i++) {
                    echo "<td class='border border-gray-300 bg-gray-100'></td>";
                }

                for ($i = $firstDayOfMonth; $i < 7; $i++) {
                    $currentDate = DateTime::createFromFormat('Y-m-d', "$year-$month-$currentDay");

                    $isUnavailable = false;
                    foreach ($unavailableRanges as $range) {
                        if ($currentDate >= $range['start'] && $currentDate <= $range['end']) {
                            $isUnavailable = true;
                            break;
                        }
                    }

                    $buttonClass = $isUnavailable ? 'bg-red-300' : 'bg-gray-300';

                    echo "<td class='border border-gray-300 py-2'>";
                    echo "<button type='button' class='date-btn $buttonClass' data-date='$currentDay' onclick='toggleDate(this)'>$currentDay</button>";
                    echo "</td>";

                    $currentDay++;
                }
                echo "</tr>";

                while ($currentDay <= $daysInMonth) {
                    echo "<tr>";
                    for ($i = 0; $i < 7; $i++) {
                        if ($currentDay <= $daysInMonth) {
                            $currentDate = DateTime::createFromFormat('Y-m-d', "$year-$month-$currentDay");

                            $isUnavailable = false;
                            foreach ($unavailableRanges as $range) {
                                if ($currentDate >= $range['start'] && $currentDate <= $range['end']) {
                                    $isUnavailable = true;
                                    break;
                                }
                            }

                            $buttonClass = $isUnavailable ? 'bg-red-300' : 'bg-gray-300';

                            echo "<td class='border border-gray-300 py-2'>";
                            echo "<button type='button' class='date-btn $buttonClass' data-date='$currentDay' onclick='toggleDate(this)'>$currentDay</button>";
                            echo "</td>";

                            $currentDay++;
                        } else {
                            echo "<td class='border border-gray-300 bg-gray-100'></td>";
                        }
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <input type="hidden" id="selectedDates" name="selectedDates" value="">
        <div class="flex justify-center">
            <button type="submit" name="submit" class="mt-4 px-4 py-2 bg-green-500 text-white">Submit</button>
        </div>
   </form>

        
    </div>
</div>

</div>
<script>
    let selectedDates = [];

    function toggleDate(button) {
        const date = button.getAttribute('data-date');
        
        const index = selectedDates.indexOf(date);
        if (index > -1) {
            selectedDates.splice(index, 1);
            button.classList.remove('bg-green-500');
            button.classList.add('bg-blue-500');
        } else {
            selectedDates.push(date);
            button.classList.remove('bg-blue-500');
            button.classList.add('bg-green-500');
        }

        document.getElementById('selectedDates').value = selectedDates.join(',');
    }
</script>
<?php

$content = ob_get_clean();
require_once "views/layoutClient.php";