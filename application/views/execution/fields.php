<div class="form-group row">
     <label class="col-sm-3 col-form-label">Project</label>
          <select class="form-control col-sm-9" name="project" value="<?php echo $this->input->post('project'); ?>" onchange="getTestCasesReport()">
            <option value="" <?php echo in_array($this->input->post('project'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
              <option value="RevlonUK" <?php echo $this->input->post('project') === 'RevlonUK' ? 'selected' : ''?>>RevlonUK</option>
              <option value="RevlonUS" <?php echo $this->input->post('project') === 'RevlonUS' ? 'selected' : ''?>>RevlonUS</option>
              <option value="Braun" <?php echo $this->input->post('project') === 'Braun' ? 'selected' : ''?>>BraunUS</option>
              <option value="BraunEMEA" <?php echo $this->input->post('project') === 'BraunEMEA' ? 'selected' : ''?>>BraunEMEA</option>
              <option value="oxo" <?php echo $this->input->post('project') === 'oxo' ? 'selected' : ''?>>oxo</option>
              <option value="Drybar" <?php echo $this->input->post('project') === 'Drybar' ? 'selected' : ''?>>Drybar</option>
              <option value="Stinger" <?php echo $this->input->post('project') === 'Stinger' ? 'selected' : ''?>>Stinger</option>
              <option value="Febreze" <?php echo $this->input->post('project') === 'Febreze' ? 'selected' : ''?>>Febreze</option>
              <option value="Honeywell " <?php echo $this->input->post('project') === 'Honeywell' ? 'selected' : ''?>>Honeywell</option>
              <option value="Vicks" <?php echo $this->input->post('project') === 'Vicks' ? 'selected' : ''?>>Vicks</option>
              <option value="PUR" <?php echo $this->input->post('project') === 'PUR' ? 'selected' : ''?>>PUR</option>
              <option value="Hot Tools" <?php echo $this->input->post('project') === 'Hot Tools' ? 'selected' : ''?>>HotTools-b2c</option>
              <option value="Hot Tools" <?php echo $this->input->post('project') === 'Hot Tools' ? 'selected' : ''?>>HotTools-b2b</option>
              <option value="Hydroflask" <?php echo $this->input->post('project') === 'Hydroflask' ? 'selected' : ''?>>HydroflaskUS</option>  
              <option value="HydroflaskEMEA" <?php echo $this->input->post('project') === 'HydroflaskEMEA' ? 'selected' : ''?>>HydroflaskEMEA</option>                
         </select>
         
     <input type="hidden"  name="confirm" value="true"/>
 </div>
 <div class="form-group row">
      <label class="col-sm-3 col-form-label">Environment</label>
      <select class="form-control col-sm-9" name="environment" value="<?php echo $this->input->post('environment')?>" onchange="getTestCasesReport()">
        <option value="" <?php echo in_array($this->input->post('environment'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
        <option value="Staging" <?php echo $this->input->post('environment') === 'Staging' ? '"selected"' : ''?>>Staging</option>
        <option value="Development" <?php echo $this->input->post('environment') === 'Development' ? "selected" : ''?>>Development</option>
        <option value="Production" <?php echo $this->input->post('environment') === 'Production' ? "selected" : ''?>>Production</option>
        </select>
  </div>

  <div class="form-group row">
       <label class="col-sm-3 col-form-label">Testing Type</label>
       <select class="form-control col-sm-9" name="testingTYpe" value="<?php echo $this->input->post('testingTYpe')?>"  onchange="getTestCasesReport()">
         <option value="" <?php echo in_array($this->input->post('testingTYpe'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
            <option value="Demo testing" <?php echo $this->input->post('testingTYpe') === 'Demo testing' ? "selected" : ''?>>Demo testing</option>
           <option value="Build smoke testing" <?php echo $this->input->post('testingTYpe') === 'Build smoke testing' ? "selected" : ''?>>Build smoke testing</option>
           <option value="System regression testing" <?php echo $this->input->post('testingTYpe') === 'System regression testing' ? "selected" : ''?>>System regression testing</option>
           <option value="System integration testing" <?php echo $this->input->post('testingTYpe') === 'System integration testing' ? "selected" : ''?>>System integration testing</option>
       </select>
   </div>


   <div class="form-group row">
        <label class="col-sm-3 col-form-label">Device Type</label>
        <div class="col-sm-9">
          <input type="radio" name="device" value="web" <?php echo in_array($this->input->post('device'), ["web", "", null])  ? 'checked' : '';?> id="webRadio"/>
           <label for="webRadio">Web</label>
          <input type="radio" name="device" value="mobile" <?php echo $this->input->post('device') === 'mobile' ? "checked" : "";?> id="mobRadio" />
          <label for="mobRadio">Mobile</label>
      </div>
    </div>

    <div class="form-group row" id="web">
         <label class="col-sm-3 col-form-label">Browsers</label>
         <select class="form-control col-sm-9" name="browsers" value="<?php echo $this->input->post('browsers')?>" >
            <option value="" <?php echo in_array($this->input->post('browsers'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
             <option value="Chrome"  <?php echo $this->input->post('browsers') === 'Chrome' ? "selected" : ''?>>Chrome</option>
             <option value="Firefox"  <?php echo $this->input->post('browsers') === 'Firefox' ? "selected" : ''?>>Firefox</option>
             <option value="Safari"  <?php echo $this->input->post('browsers') === 'Safari' ? "selected" : ''?>>Safari</option>
         </select>
     </div>

     <div class="form-group row" id="mobile">
          <label class="col-sm-3 col-form-label">Devices</label>
          <select class="form-control col-sm-9" name="devices" value="<?php echo $this->input->post('devices')?>" >
                                        <option value="" <?php echo in_array($this->input->post('devices'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
                                          <option value="iPhone" <?php echo $this->input->post('devices') === 'iPhone' ? "selected" : ''?>>iPhone</option>
                                          <option value="Android"  <?php echo $this->input->post('devices') === 'Android' ? "selected" : ''?>>Android</option>
                                          <option value="iPad"  <?php echo $this->input->post('devices') === 'iPad' ? "selected" : ''?>>iPad</option>
                                      </select>
      </div>

      <div class="form-group row" id="testcases_block">
          <label class="col-sm-3 col-form-label">No of Test Cases</label>
          <input class="form-control col-sm-5" type="text" name="testcases" value="<?php echo $this->input->post('testcases')?>" readonly/>
          <a style="margin-top: 7px;margin-left: 25px" href="void(0)" data-toggle="modal" data-target="#detailedTestCases">Detailed List</a>

           <!-- Detailed Tests Modal-->
    <div class="modal fade" id="detailedTestCases" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detailed Tests</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                   <thead>
                                       <tr style="background-color: #e2e2e2;border:1px solid #b6b6b6">
                                           <th style="width:150px;">Test Case Id</th>
                                           <th style="width:250px;">Test Script Name</th>
                                           <th style="width:100px;">Description</th>
                                       </tr>
                                   </thead>

                                   <tbody>
                                   
                                   


                                   </tbody>
                               </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
</div>

      </div>


      <div class="form-group row">
           <label class="col-sm-3 col-form-label">Hosting Machine</label>
           <select class="form-control col-sm-9" name="machine" value="<?php echo $this->input->post('machine')?>">
              <option value="" <?php echo in_array($this->input->post('machine'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
               <option value="EP-FAUTOMAT"  <?php echo $this->input->post('machine') === 'EP-FAUTOMAT' ? "selected" : ''?>>EP-FAUTOMAT</option>
           </select>
       </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Emails</label>
        <input class="form-control col-sm-9" type="text" name="emails" value="<?php echo $this->input->post('emails')?> "/>
        <em class="help-block float-right col-sm-6 text-italic">(Enter comma separated values)</em>
    </div>
    
