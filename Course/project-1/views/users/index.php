<div class="card">
                <div class="card-body">
                  <div class="card-title">
                         Danh sách nhân viên
                         <a href="index.php?module=user&action=create" style = "float:right;">Thêm mới</a>
                  </div>
                <table id="recent-purchases-listing" class="table dataTable no-footer" role="grid">
                    <thead>
                        <tr>
                            <th>Ảnh đại diện</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Điện thoại</th>
                            <th>Địa chỉ</>
                            <th>Hành động</th>
                        </tr>
		            </thead>
                    <tbody>
                    <?php
                            $connect = mysqli_connect('localhost', 'root', '', 'phpclass10');
                            mysqli_set_charset($connect, "utf8");

                            if (mysqli_connect_errno() === 0) {
                                
                                $limit = 2;

					            $start = isset($_GET['page']) ? ($_GET['page'] - 1) * $limit : 0;

					            $sql   = 'SELECT *,	(SELECT count(*) from users) as totalRecord
                                            FROM users LIMIT '. $start . ', '. $limit .'';
                                            
                                $query = mysqli_query($connect, $sql);
                                $users = [];
                                
                                while ($row = mysqli_fetch_object($query)) {
                                    array_push($users, $row);
                                }

                                $totalRecord = isset($users[0]) ? $users[0]->totalRecord : 0;
                                $totalPage = ceil($totalRecord/$limit);
                    
                                foreach ($users as $user):
                                    $userAvatar = $user->avatar ? '<img src="./uploads/users/'.$user->avatar.'" width="200" />' : '';
                                    echo '<tr>';
                                    echo '<td align="center">'. $userAvatar .'</td>';
                                    echo '<td>' . $user->fullName . '</td>';
                                    echo '<td>' . $user->email . '</td>';
                                    echo '<td>' . $user->phone . '</td>';
                                    echo '<td>' . $user->address . '</td>';
                                    echo '<td>
                                        <a href="index.php?module=user&action=detail&id='. $user->id . '">Chi tiết</a> |
                                        <a href="index.php?module=user&action=edit&id='. $user->id . '">Sửa</a> |
                                        <a onclick="return confirm(\'Bạn có muốn xóa không\')" href="index.php?module=user&action=delete&id='. $user->id . '">Xóa</a>                                    </td>';
                                    echo '</tr>';
                                endforeach;
                            }
                            ?>
                    </tbody>
                </table>
                    <?php
                        if (isset($totalPage)):
                            
                            for ($page = 1; $page <= $totalPage; $page++) {
                                echo '<a href="index.php?module=user&page='.$page.'" class="page">' .  $page . '</a>&nbsp;';
                            }
                            
                        endif
                    ?>
              </div>
              </div>

