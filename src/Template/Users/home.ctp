<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <div class="jumbotron">
    <h2 class="home-title"> Missing in Michigan <h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="about">
        <h2 class="about-header"> About the System </h2>
        <p class="about-paragraph">
            The Missing in Michigan System (MIMS) allows for the Concerned Public to be more active in helping Law Enforcement track down missing people
            and bring them back to their friends and family sooner.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="join">
        <?php echo $this->Html->link("Sign Up", array('controller' => 'Users','action'=> 'add'), array( 'class' => 'home-button button')) ?>
        <?php echo $this->Html->link("Sign In", array('controller' => 'Users','action'=> 'login'), array( 'class' => 'home-button button')) ?>
      </div>
    </div>
  </div>
</body>
</html>
