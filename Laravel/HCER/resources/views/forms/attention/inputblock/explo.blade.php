
 <div class="form-group">
      <label for="id_head" class="col-lg-2 control-label">Cabeza</label>
      <div class="col-lg-5">
        <select disabled class="form-control" name="id_head" >
          <option value=""></option>
          @foreach ($cpsps as $cpsp)
      <option value="{{$cpsp->id}}"@if($cpsp->id == $viewexplo->id_head) selected @endif>{{$cpsp->dcpsp}}</option>
      

          @endforeach
        </select>

      </div>
        </div> 

         <div class="form-group">
      <label for="id_eyes" class="col-lg-2 control-label">Ojos</label>
      <div class="col-lg-5">
        <select disabled class="form-control" name="id_eyes" >
          <option value=""></option>
          @foreach ($cpsps as $cpsp)
     <option value="{{$cpsp->id}}"@if($cpsp->id == $viewexplo->id_eyes) selected @endif>{{$cpsp->dcpsp}}</option>
      

          @endforeach
        </select>

      </div>
        </div> 


         <div class="form-group">
      <label for="id_ears" class="col-lg-2 control-label">Oídos</label>
      <div class="col-lg-5">
        <select disabled class="form-control" name="id_ears" >
          <option value=""></option>
          @foreach ($cpsps as $cpsp)
      <option value="{{$cpsp->id}}"@if($cpsp->id == $viewexplo->id_ears) selected @endif>{{$cpsp->dcpsp}}</option>
      

          @endforeach
        </select>

      </div>
        </div> 

      <div class="form-group">
      <label for="id_nose" class="col-lg-2 control-label">Nariz</label>
      <div class="col-lg-5">
        <select  disabled class="form-control" name="id_nose" >
          <option value=""></option>
          @foreach ($cpsps as $cpsp)
      <option value="{{$cpsp->id}}"@if($cpsp->id == $viewexplo->id_nose) selected @endif>{{$cpsp->dcpsp}}</option>
      

          @endforeach
        </select>

      </div>
        </div> 

        <div class="form-group">
      <label for="id_abdomen" class="col-lg-2 control-label">Abdomen</label>
      <div class="col-lg-5">
        <select disabled class="form-control" name="id_abdomen" >
          <option value=""></option>
          @foreach ($cpsps as $cpsp)
      <option value="{{$cpsp->id}}"@if($cpsp->id == $viewexplo->id_abdomen) selected @endif>{{$cpsp->dcpsp}}</option>
      

          @endforeach
        </select>

      </div>
        </div> 

