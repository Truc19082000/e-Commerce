<table class="table">

    <tr>
        <td style="padding-left: 10px;">
            <form action="?menu=rate" method="post">
                <input type="hidden" name="masp" value="<?php echo $row['masp']; ?>">
                <table width="200px">
                    <tr width="8px">
                    <td><input type="radio" name="rate" id="rate1" value="1">
                        <label for="rate">
                            1<span class="fa fa-star" style="color: #E8EA1D; vertical-align: middle;"></span>
                        </label>
                    </td>
                    <td><input type="radio" name="rate" id="rate12" value="2">
                        <label for="rate2">
                            2<span class="fa fa-star" style="color: #E8EA1D; vertical-align: middle;"></span>
                        </label>
                    </td>
                    <td><input type="radio" name="rate" id="rate13" value="3">
                        <label for="rate3">
                            3<span class="fa fa-star" style="color: #E8EA1D; vertical-align: middle;"></span>
                        </label>
                    </td><td><input type="radio" name="rate" id="rate14" value="4">
                        <label for="rate4">
                            4<span class="fa fa-star" style="color: #E8EA1D; vertical-align: middle;"></span>
                        </label>
                    </td>
                    <td><input type="radio" name="rate" id="rate15" value="5">
                        <label for="rate5">
                            5<span class="fa fa-star" style="color: #E8EA1D; vertical-align: middle;"></span>
                        </label>
                    </td>

                    </tr>

                    <tr>
                        <td colspan="2"><input class="btn btn-primary" type="submit" name="submit" value="Đánh giá"></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>