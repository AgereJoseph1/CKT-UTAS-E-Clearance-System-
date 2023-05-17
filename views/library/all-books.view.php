
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">All  Books</li>
      </ol>
    </nav>
      <a href="add-book.php" class="btn btn-dark mb-1">Add New Book+</a>
      <div class="row">
          <div class="col-12 offset-md-4 col-md-4">
              <?php include_once VIEW_ROOT."includes/alerts.inc.php" ?>
          </div>
      </div>
      <div class="card">
          <div class="card-body">
              <table class="table table-bordered table-hover">
                  <thead class="table-info">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($ctx['books'] as $book): ?>
                            <tr>
                              <td><?= $book['title']?></td>
                              <td><?= $book['author']?></td>
                              <td class="d-flex justify-content-center">
                                  <form action="add-book.php" method="POST">
                                      <input type="hidden" value="<?= $book['title'] ?>" name="title">
                                      <input type="hidden" value="<?= $book['author'] ?>" name="aut">
                                      <button type="submit" name="edit" class="btn btn-info btn-sm mr-2">Edit</button>
                                  </form> ||
                                  <form method="POST">
                                      <input type="hidden" value="<?= $book['id'] ?>" name="bid">
                                      <button type="submit" onclick="return confirm('Are you sure?')" name="delBook" class="btn btn-danger btn-sm mr-2">
                                          Delete
                                      </button>
                                  </form>
                              </td>
                            </tr>
                   <?php endforeach ;?>
                  </tbody>
              </table>
          </div>
      </div>  
  </div>
</div>