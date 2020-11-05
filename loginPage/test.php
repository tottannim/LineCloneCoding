<html>
<head>
	<title>Register</title>
	<link href="./style.css" rel="stylesheet" type="text/css">
</head>
<body>

<h1><?php echo $title ?></h1>

<form action="./test_check.php" onsubmit="return fregisterform_submit(this);" method="post">
	<input type="hidden" name="mode" value="<?php echo $mode ?>">

	<table>
		<tr>
			<th>아이디</th>
			<td><input type="text" name="mb_id" value="<?php echo $mb['mb_id'] ?>" <?php echo $modify_mb_info ?>></td>
		</tr>
		<tr>
			<th>비밀번호</th>
			<td><input type="password" name="mb_password"></td>
		</tr>
		<tr>
			<th>비밀번호 확인</th>
			<td><input type="password" name="mb_password_re"></td>
		</tr>
		<tr>
			<th>이름</th>
			<td><input type="text" name="mb_name" value="<?php echo $mb['mb_name'] ?>" <?php echo $modify_mb_info ?>></td>
		</tr>
		<tr>
			<th>이메일</th>
			<td><input type="text" name="mb_email" value="<?php echo $mb['mb_email'] ?>"></td>
		</tr>
		<tr>
			<th>성별</th>
			<td>
				<label><input type="radio" name="mb_gender" value="남자" <?php echo ($mb['mb_gender'] == "남자") ? "checked" : "";?> >남자</label>
				<label><input type="radio" name="mb_gender" value="여자" <?php echo ($mb['mb_gender'] == "여자") ? "checked" : "";?> >여자</label>
			</td>
		</tr>
		<tr>
			<th>직업</th>
			<td>
				<select name="mb_job">
					<option value="">선택하세요</option>
					<option value="학생" <?php echo ($mb['mb_job'] == "학생") ? "selected" : "";?> >학생</option>
					<option value="회사원" <?php echo ($mb['mb_job'] == "회사원") ? "selected" : "";?> >회사원</option>
					<option value="공무원" <?php echo ($mb['mb_job'] == "공무원") ? "selected" : "";?> >공무원</option>
					<option value="주부" <?php echo ($mb['mb_job'] == "주부") ? "selected" : "";?> >주부</option>
					<option value="무직" <?php echo ($mb['mb_job'] == "무직") ? "selected" : "";?> >무직</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>관심언어</th>
			<td>
				<label><input type="checkbox" name="mb_language[]" value="HTML" <?php echo strpos($mb['mb_language'], 'HTML') !== false ? 'checked' : '' ?>>HTML</label>
				<label><input type="checkbox" name="mb_language[]" value="CSS" <?php echo strpos($mb['mb_language'], 'CSS') !== false ? 'checked' : '' ?>>CSS</label>
				<label><input type="checkbox" name="mb_language[]" value="PHP" <?php echo strpos($mb['mb_language'], 'PHP') !== false ? 'checked' : '' ?>>PHP</label>
				<label><input type="checkbox" name="mb_language[]" value="MySQL" <?php echo strpos($mb['mb_language'], 'MySQL') !== false ? 'checked' : '' ?>>MySQL</label>
			</td>
		</tr>
		<tr>
			<td colspan="2" class="td_center"><input type="submit" value="회원가입"> <a href="./login.php">취소</a></td>
		</tr>
	</table>
</form>
    </body>
</html>