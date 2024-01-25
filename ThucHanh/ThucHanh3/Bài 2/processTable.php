

<?php
class process
{
        function increaseRow($value)  {
                echo '
                <table>
                        <tr>
                                <th>STT</th>
                                <th>Loại CPU</th>
                                <th>Thông Số Kỹ Thuật</th>
                                <th>Giá Thành</th>
                        </tr>';
                        for ($i=1; $i <= $value; $i++){ 
                                
                                if($i%2==0)
                                {
                                        echo '
                                        <tr class="soChan">
                                                <td>' . $i . '</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                        </tr>
                                        ';
                                }
                                else
                                {
                                        echo '
                                        <tr>
                                                <td>' . $i . '</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                        </tr>
                                        ';
                                }
                                 
                        }
                '</table>';
        }
}
?>

