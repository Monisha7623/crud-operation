<html>

<head>
    <title>Displaying Records</title>
    <style>
        .result,
        .result td,
        .result th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            margin: auto;
            background-color: lightblue;
        }

        .result th {
            background-color: lightskyblue;
        }
    </style>
</head>
<body>
    <a href="<?= base_url('register/student') ?>">Go to registeration Form</a>

    <?php
    if (isset($data)) {
    ?>
        <form action="<?= base_url('register/update') ?>" method="post">
            <table cellspacing="20">
                <tr>
                    <td>Id</td>
                    <td><input name="id" value="<?= $data[0]->id ?>" readonly=""></td>
                </tr>
                <tr>
                    <td> Name</td>
                    <td><input name="stname" value="<?= $data[0]->student_name ?>"></td>
                </tr>
                <tr>
                    <td>Email Id</td>
                    <td><input name="stmail" value="<?= $data[0]->student_email ?>"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input name="stmobile" value="<?= $data[0]->student_mobile ?>"></td>
                </tr>
                <tr>
                    <td><button>Update</button></td>
                </tr>
            </table>
        </form>


    <?php
    } else {
    ?>
        <table class="result">
            <tr>
                <th>Action</th>
                <th>ID</th>
                <th>Name</th>
                <th> Email</th>
                <th>Mobile_no</th>
            </tr>
            <?php
            if (isset($table)) {
                foreach ($table as $row) {
            ?>
                    <tr>
                        <td><a href="<?= base_url('register/edit/' . $row->id) ?>">Edit</a></td>
                        <td><?= $row->id ?></td>
                        <td><?= $row->student_name ?></td>
                        <td><?= $row->student_email ?></td>
                        <td><?= $row->student_mobile ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    <?php
    }
    ?>
</body>

</html>