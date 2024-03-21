<!DOCTYPE html>
<html lang="en">
<head>@extends('admin.sidebar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>User Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 100px auto; /* ห่างจากด้านบน 100px และตรงกลาง */
            width: 70%; /* เพิ่มความกว้างของเนื้อหา */
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* เปลี่ยนสีของแถวเป็นเทา */
        }

        .delete-button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }

    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4); /* Semi-transparent black background */
        padding-top: 60px; /* Space from the top */
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto; /* Center the modal */
        padding: 20px;
        max-width: 700px; /* Limit the width */
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
    }
    /* CSS */
.modal-content .row {
    display: flex;
    margin-bottom: 20px;
}

.modal-content .row .col {
    flex: 1;
    margin-right: 10px;
}

.modal-content .row .col:last-child {
    margin-right: 0;
}


    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Form styles */
    .modal-content h2 {
        margin-bottom: 20px; /* Spacing below heading */
    }

    .modal-content label {
        display: block;
        margin-bottom: 10px;
    }

    .modal-content input[type="text"],
    .modal-content input[type="email"],
    .modal-content input[type="password"],
    .modal-content select {
        width: calc(100% - 20px); /* Full width input, subtract padding */
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box; /* Ensure padding and border don't add to width */
    }

    .modal-content button[type="submit"] {
        background-color: #4CAF50; /* Green */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        float: right;
    }

    .modal-content button[type="submit"]:hover {
        background-color: #45a049;
    }
        /* Style for the search input */
#searchInput {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;

}

#myBtn {
        float: right; /* จัดตำแหน่งไอคอนไปทางขวา */
        margin-left: 10px; /* เพิ่มระยะห่างระหว่างไอคอนกับปุ่ม */
        font-size: 24px; /* ปรับขนาดของไอคอน */
        color: #007bff; /* สีข้อความของไอคอน */
        cursor: pointer; /* ปรับเป็นรูปแบบเคอร์เซอร์เมาส์ */
    }

    #myBtn:hover {
        color: #0056b3; /* เปลี่ยนสีเมื่อเมาส์ชี้ */
    }

    
        
    </style>
</head>
<!-- resources/views/admin/manageU.blade.php -->
<body>


<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>ข้อมูลสมาชิก</h2>
    <form method="post" action="{{ route('admin.addUser') }}">
        @csrf
        <div class="row">
            <div class="col">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="col">
                <label for="type">Type:</label>
                <select id="type" name="type">
                    <option value="0">สมาชิก</option>
                    <option value="1">ผู้ดูแลระบบ</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="col">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="province">Province:</label>
                <select id="province" name="province">
                    <option value="">เลือกจังหวัด</option>
                    <?php
    $provinces = [
        'กรุงเทพมหานคร', 'สมุทรปราการ', 'นนทบุรี', 'ปทุมธานี', 'พระนครศรีอยุธยา',
        'อ่างทอง', 'ลพบุรี', 'สิงห์บุรี', 'ชัยนาท', 'สระบุรี',
        'ชลบุรี', 'ระยอง', 'จันทบุรี', 'ตราด', 'ฉะเชิงเทรา',
        'ปราจีนบุรี', 'นครนายก', 'สระแก้ว', 'นครราชสีมา', 'บุรีรัมย์',
        'สุรินทร์', 'ศรีสะเกษ', 'อุบลราชธานี', 'ยโสธร', 'ชัยภูมิ',
        'อำนาจเจริญ', 'หนองบัวลำภู', 'ขอนแก่น', 'อุดรธานี', 'เลย',
        'หนองคาย', 'มหาสารคาม', 'ร้อยเอ็ด', 'กาฬสินธุ์', 'สกลนคร',
        'นครพนม', 'มุกดาหาร', 'เชียงใหม่', 'ลำพูน', 'ลำปาง',
        'อุตรดิตถ์', 'แพร่', 'น่าน', 'แพร่', 'เชียงราย',
        'แม่ฮ่องสอน', 'นครสวรรค์', 'อุทัยธานี', 'กำแพงเพชร', 'ตาก',
        'สุโขทัย', 'พิษณุโลก', 'พิจิตร', 'เพชรบูรณ์', 'ราชบุรี',
        'กาญจนบุรี', 'สุพรรณบุรี', 'นครปฐม', 'สมุทรสาคร', 'สมุทรสงคราม',
        'เพชรบุรี', 'ประจวบคีรีขันธ์', 'ชุมพร', 'ระนอง', 'สุราษฎร์ธานี',
        'พังงา', 'ภูเก็ต', 'กระบี่', 'นครศรีธรรมราช', 'ตรัง',
        'พัทลุง', 'สตูล', 'สงขลา', 'ปัตตานี', 'ยะลา',
        'นราธิวาส', 'บึงกาฬ'
    ];

    foreach ($provinces as $province) {
        echo "<option value=\"$province\">$province</option>";
    }
    ?>
</select>
            </div>
        </div>
        <button type="submit">Add User</button>
        <br><br>
    </form>
  </div>
</div>




    <div id="user-list"> 
        <table>
            <thead>
                <tr>
                    <td colspan="5">
                        <input type="text" id="searchInput" placeholder="ค้นหา..." onkeyup="searchTable()">
                        <i id="myBtn" class="fa-solid fa-user-plus"></i>
                    </td>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>ชื่อ</th>
                    <th>อีเมล</th>
                    <th>จังหวัด</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->province }}</td>
                        <td>
                            <form method="post" action="{{ route('admin.deleteUser', ['id' => $user->id]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="delete-button"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Search function
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("user-list");
        tr = table.getElementsByTagName("tr");
        for (i = 1; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (var j = 0; j < td.length; j++) {
                cell = tr[i].getElementsByTagName("td")[j];
                if (cell) {
                    txtValue = cell.textContent || cell.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        break;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }
</script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

</body>

</html>
