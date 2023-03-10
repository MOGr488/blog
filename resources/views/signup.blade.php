<!DOCTYPE html>
<html {{ App::currentLocale() == 'ar' ? 'dir=rtl lang=ar': 'dir=ltr lang=en' }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Signup') }}</title>
    @if(App::currentLocale() == 'ar')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@700&family=Noto+Naskh+Arabic&display=swap" rel="stylesheet">
<style>
  body {
    font-family: 'Noto Naskh Arabic';
  }
  h1 { font-family: 'Noto Kufi Arabic', font-weight: 700}
</style>

    @else
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @endif
</head>
<body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">{{ __('Welcome to our app') }}</h1>
           
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" data-keeper-lock-id="k-px1s49e2v5d">
                <label for="floatingInput">{{ __('Email address') }}</label>
              <keeper-lock class="focus-visible keeper-lock-disabled" tabindex="0" id="k-px1s49e2v5d" style="background-image: url(&quot;chrome-extension://bfogiafebfohielmmehodmfbbebbbpei/images/ico-field-fill-lock-grey.svg&quot;) !important; background-size: 16px 16px !important; cursor: pointer !important; width: 16px !important; position: absolute !important; opacity: 0 !important; margin-top: auto !important; min-width: 16px !important; top: 20.9986px; left: 414.216px; z-index: 1; padding: 0px; height: 16px !important;" aria-label="Open Keeper Popup" role="button"></keeper-lock></div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" data-keeper-lock-id="k-yphmztqtygm">
                <label for="floatingPassword">{{ __('Password') }}</label>
              <keeper-lock class="focus-visible keeper-lock-disabled" tabindex="0" id="k-yphmztqtygm" style="background-image: url(&quot;chrome-extension://bfogiafebfohielmmehodmfbbebbbpei/images/ico-field-fill-lock-grey.svg&quot;) !important; background-size: 16px 16px !important; cursor: pointer !important; width: 16px !important; position: absolute !important; opacity: 1 !important; margin-top: auto !important; min-width: 16px !important; top: 20.9986px; left: 414.216px; z-index: 1; padding: 0px; animation-name: none; height: 16px !important;" aria-label="Open Keeper Popup" role="button"></keeper-lock></div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> {{ __('Remember me') }}
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Signup') }}</button>
              <hr class="my-4">
             
            </form>
          </div>
        </div>
      </div>
</body>
</html>