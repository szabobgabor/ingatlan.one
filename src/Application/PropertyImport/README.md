# Property import

## Fetching the export files

```
php cli.php import:fetch [--force]
```

Downloads every URL listed under `sources` in `config/import.php` into `data/import/`.

- **File name:** the readable part of the URL plus a short md5 of the full URL, so two
  different URLs never share a file, e.g.
  `…/xml_hk/Gabor.Balint.Szabo@otpip.hu.xml` → `data/import/Gabor.Balint.Szabo-otpip.hu-<8 hex>.xml`
  (`FetchImportFiles::fileName()`).
- **Freshness:** a file modified less than 4 hours ago (`FetchImportFiles::MAX_AGE_SECONDS`)
  is not downloaded again. `--force` downloads it anyway.
- **Failures:** each source is handled on its own; one failing URL doesn't stop the others.
  The command exits with 1 if any source failed.
- **Safe writes:** the download goes to a `.tmp` file that is renamed only after a successful
  download, so a failed run keeps the previous file intact.

The downloader is behind `Application\Contract\FileDownloader`, implemented by
`Infrastructure\Http\StreamFileDownloader` with plain PHP streams (no HTTP client dependency).

Known limitation: the content isn't validated, so an HTML error page served with HTTP 200
would be saved as the XML file.