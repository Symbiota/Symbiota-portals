# Mycoportal - custom Symbiota portal 'patch'

# Clone Symbiota

```
git clone https://github.com/Symbiota/Symbiota.git portal
```

# Clone the patch

```
git clone https://gitgud.io/symb-quirks/setup-symbmyco.git patch
```

# Clone the toolkit

```
git clone https://github.com/SymbiotaTk/symbiota-portal-toolkit tk
```

# Establish Symbiota portal setup

```
cd portal/config
bash setup.bash
cd ../../

```

# Apply the patch

```
rsync -avP patch/* portal/
```

# Move the toolkit into place and restore instance config

```
mv tk portal/
mv portal/tk/config.php portal/tk/config_template.php
mv portal/_tk_config.php portal/tk/config.php
```

# Finish the Symbiota portal and toolkit configuration

```
cd portal/config

<edit dbconnection.php>
  - update mySQL info

<edit symbini.php>
  - update __SMTP_* __TEMPDIRROOT__  __CLIENTURL_DEFAULT__

  - update GBIF key

      $GBIF_USERNAME = '';                //GBIF username which portal will use to publish
      $GBIF_PASSWORD = '';                //GBIF password which portal will use to publish
      $GBIF_ORG_KEY = '';                 //GBIF organization key for organization which is hosting this portal

  - update Recaptcha

      $RECAPTCHA_PUBLIC_KEY = '';                     //Now called site key
      $RECAPTCHA_PRIVATE_KEY = '';            //Now called secret key

cd ../tk

<edit config.php>
  - any [mod.*] may be disabled
  - update backup_threshold site_salt

php index.php --help
```

If you want to use the toolkit images, a cache will need to be compiled. See [tk/README.md](https://github.com/SymbiotaTk/symbiota-portal-toolkit/blob/trunk/README.md#images-module)

To add user access for uploading files see [tk/README.md](https://github.com/SymbiotaTk/symbiota-portal-toolkit/blob/trunk/README.md#upload-module)

To use the encrypted backup module see [tk/README.md](https://github.com/SymbiotaTk/symbiota-portal-toolkit/blob/trunk/README.md#upload-module)
