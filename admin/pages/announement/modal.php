<!-- Add Announcement -->
                    <!-- Modal -->

                    <div class="modal fade" id="add" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <form method="POST" action="../visitor/dblink.php">
                                         <div class="form-group">
                                             <input type="date" class="form-control" name="date"
                                                 placeholder="Enter Date Here">
                                         </div>

                                         <div class="form-group">

                                             <textarea type="text" class="text" class="form-control" name="content"
                                                 placeholder="Enter Text Here"></textarea>


                                         </div>


                                         <div class="form-group">
                                             <input type="text" class="form-control" name="link"
                                                 placeholder="Enter Link Here">

                                         </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                     <button name="MOTHERFUCKINGBUTTON" class="btn btn-primary">Save changes</button>
                                 </div>
                             </div>
                             </form>
                         </div>
                     </div>
<!-- /Add Announcement -->