<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                body {
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                }

                table,
                th,
                td {
                        border: 1px solid black;

                }

                div {
                        margin-top: 20px;
                        text-align: center;
                }
        </style>
</head>

<body>
        <h1>Border Marker</h1>
        <h3>Demonstrate how to read HTML form elements</h3>
        <h3>Text to modify</h3>

        <form action="borderResult.php" method="get">
                <textarea name="content" cols="30" rows="10"></textarea>
                <table style="margin-top: 20px;">
                        <tr>
                                <th colspan="2">Border style</th>
                                <th colspan="2">Border size</th>
                        </tr>

                        <tr>
                                <td colspan="2">
                                        <select name="style" id="">
                                                <option value="ridge">ridge</option>
                                                <option value="groove">groove</option>
                                                <option value="double">double</option>
                                                <option value="inset">inset</option>
                                                <option value="outset">outset</option>
                                        </select>
                                </td>

                                <td>
                                        <select name="size" multiple>
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
                                        <input type="radio" name="type" value="px">pixels
                                        <br>

                                        <input type="radio" name="type" value="pt">points
                                        <br>

                                        <input type="radio" name="type" value="cm">centimeters
                                        <br>

                                        <input type="radio" name="type" value="in">inches
                                        <br>
                                </td>

                </table>
                <div>
                        <input type="submit" value="Xác nhận">
                </div>

        </form>
</body>

</html>