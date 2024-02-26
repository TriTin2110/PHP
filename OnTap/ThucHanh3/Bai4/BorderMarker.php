<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                #container {
                        text-align: center;
                }

                form {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                }

                .margin {
                        margin-bottom: 20px;
                }

                table {
                        border-collapse: separate;
                }
        </style>
</head>


<body>
        <div id="container">
                <h1>Boder Marker</h1>
                <h2>How to read HTML page</h2>
                <h2>Text modify</h2>
                <form action="Result.php" method="get">
                        <textarea class="margin" name="userContent" id="" cols="30" rows="10"></textarea>
                        <table border="2" class="margin">
                                <tr>
                                        <th colspan="2">Border Style</th>
                                        <th colspan="2">Border Size</th>
                                </tr>
                                <tr>
                                        <td colspan="2">
                                                <select name="boderStyle" id="">
                                                        <option value="ridge">ridge</option>
                                                        <option value="groove">groove</option>
                                                        <option value="double">double</option>
                                                        <option value="inset">inset</option>
                                                        <option value="outset">outset</option>
                                                </select>
                                        </td>
                                        <td>
                                                <select name="borderSize" multiple>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                </select>
                                        </td>
                                        <td>
                                                <input type="radio" name="type" value="px">pixels<br>
                                                <input type="radio" name="type" value="pt">points<br>
                                                <input type="radio" name="type" value="cm">centimeters<br>
                                                <input type="radio" name="type" value="in">inches<br>
                                        </td>
                                </tr>
                        </table>
                        <input type="submit" value="Xác nhận">
                </form>
        </div>
</body>

</html>