<?php include('head.php'); ?>

<body>
    <div class="container">
        <h3>Result</h3>
        <form action="/show2.php" method="post">
            <label for="school">Class</label>
            <select name="school">
                <option value="1">HARIDRAPOTA A. G. A. SECONDARY SCHOOL</option>
                <option value="2">OTHERS</option>
            </select>
            <label for="class">Class</label>
            <select name="class">
                <option value="Ten">Ten</option>
                <option value="Nine">Nine</option>
                <option value="Eight">Eight</option>
                <option value="Seven">Seven</option>
                <option value="Six">Six</option>
            </select>
            <label for="roll">Roll No</label>
            <input type="text" name="roll" placeholder="Roll No">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>