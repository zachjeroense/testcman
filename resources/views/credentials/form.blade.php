<div class="form-group">
    <label for="description">App / Site</label>
    <input class="form-control" type="text" name="description" id="description" value="{{ old('description') ?? $credential->description }}">
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>

<div class="form-group">
    <label for="loginName">Login Name</label>
    <input class="form-control" type="text" name="loginName" id="loginName" value="{{ old('loginName') ?? $credential->loginName }}">
    <small class="text-danger">{{ $errors->first('loginName') }}</small>
</div>

<div class="form-group">
    <label for="loginPassword">Password</label>
    <input class="form-control" type="text" name="loginPassword" id="loginPassword" value="{{ old('loginPassword') ?? $credential->loginPassword }}">
    <small class="text-danger">{{ $errors->first('loginPassword') }}</small>
</div>

<div>
    <button type="submit" class="btn btn-primary">Save</button>
</div>