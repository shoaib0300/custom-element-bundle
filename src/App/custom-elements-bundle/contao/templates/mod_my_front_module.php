<!-- templates/mod_my_frontend_module.html5 -->
<div class="my-frontend-module">   
  <form action="<?= $this->action ?>" method="POST"> 
    <input type="hidden" name="REQUEST_TOKEN" value="{{request_token}}">
    <button type="submit">Submit</button>
  </form>
</div>
