<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, "arial ce", arial, helvetica, geneva, sans-serif';
$right_font_family = '"arial ce", arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajtów', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Nie', 'Pon', 'Wto', 'Śro', 'Czw', 'Pią', 'Sob');
$month = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Paź', 'Lis', 'Gru');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, %H:%M';
$timespanfmt = '%s dni, %s godzin, %s minut i %s sekund';

$strAbortedClients = 'Przerwane';
$strAccessDenied = 'Brak dostępu';
$strAction = 'Działanie';
$strAddDeleteColumn = 'Dodanie/usunięcie pól';
$strAddDeleteRow = 'Dodanie/usunięcie wierszy kryteriów';
$strAddNewField = 'Dodanie nowego pola';
$strAddPriv = 'Dodanie nowych uprawnien';
$strAddPrivMessage = 'Nowe uprawnienia zostały dodane.';
$strAddSearchConditions = 'Dodanie warunków przeszukiwania (warunek dla "where"):';
$strAddToIndex = 'Dodanie &nbsp;%s&nbsp;kolumn do indeksu ';
$strAddUser = 'Dodanie nowego użytkownika';
$strAddUserMessage = 'Nowy użytkownik został dodany.';
$strAffectedRows = 'Zmodyfikowanych rekordów:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Powrót';
$strAfterInsertNewInsert = 'Wstawienie nowego rekordu';
$strAll = 'Wszystko';
$strAllTableSameWidth = 'wyświetlić wszystkie tabele z taką samą szerokością?';
$strAlterOrderBy = 'Sortowanie tabeli wg';
$strAnalyzeTable = 'Analizowanie tabeli';
$strAnd = 'Oraz';
$strAnIndex = 'Do %s dodany został indeks';
$strAny = 'Dowolny';
$strAnyColumn = 'Dowolna kolumna';
$strAnyDatabase = 'Dowolna baza danych';
$strAnyHost = 'Dowolny host';
$strAnyTable = 'Dowolna tabela';
$strAnyUser = 'Dowolny użytkownik';
$strAPrimaryKey = 'Do %s dodany został klucz podstawowy';
$strAscending = 'Rosnąco';
$strAtBeginningOfTable = 'Na początku tabeli';
$strAtEndOfTable = 'Na końcu tabeli';
$strAttr = 'Atrybuty';

$strBack = 'Powrót';
$strBeginCut = 'POCZĄTEK CUT';
$strBeginRaw = 'POCZĄTEK RAW';
$strBinary = ' Binarne ';
$strBinaryDoNotEdit = ' Binarne - nie do edycji ';
$strBookmarkDeleted = 'Zapamiętane zapytanie SQL zostało usunięte.';
$strBookmarkLabel = 'Nazwa';
$strBookmarkQuery = 'Zapamiętane zapytanie SQL';
$strBookmarkThis = 'Zapamiętanie zapytania SQL';
$strBookmarkView = 'Tylko do pokazania';
$strBrowse = 'Przeglądanie';
$strBzError = 'phpMyAdminoni nie udało się skompresować zrzutu z powodu zepsutego rozszerzenia Bz2 w tej wersji php. Jest bardzo zalecane by ustawić dyrektywę <code>$cfg[\'BZipDump\']</code> w pliku konfiguracyjnym phpMyAdmina na <code>FALSE</code>. Jeśli chcesz użyć funkcji kompresji Bz2, php powinien zostać zakutalizowany do najnowszej wersji. Szczegóły można zobaczyć w raporcie na temat błędów php %s.';
$strBzip = '".bz2"';

$strCannotLogin = 'Nie udało się zalogować na serwer MySQL';
$strCantLoadMySQL = 'nie można załadowac modułu MySQL,<br />proszę sprawdzić konfigurację PHP.';
$strCantLoadRecodeIconv = 'Nie udało się załadować rozszerzeń iconv lub recode, które są niezbędne do konwersji kodowania znaków, skonfiguruj php tak, by mógł używać tych rozszerzeń albo zablokuj konwersję kodowania znaków w phpMyAdminie.';
$strCantRenameIdxToPrimary = 'Nie można zmienić nazwy indeksu na PRIMARY!';
$strCantUseRecodeIconv = 'Nie udało się użyć ani funkcji iconv, ani libiconv, mimo że rozszerzenia zgłaszają się jako załadowane. Zprawdź swoją konfigurację php.';
$strCardinality = 'Moc';
$strCarriage = 'Znak powrotu: \\r';
$strChange = 'Zmiana';
$strChangeDisplay = 'Wybierz wyświetlane pole';
$strChangePassword = 'Zmiana hasła';
$strCharsetOfFile = 'System kodowanie znaków dla pliku:';
$strCheckAll = 'Zaznaczenie wszystkich';
$strCheckDbPriv = 'Sprawdzanie uprawnień bazy danych';
$strCheckTable = 'Sprawdzanie tabeli';
$strChoosePage = 'Proszę wybrać stronę do edycji';
$strColComFeat = 'Wyświetlanie komentarzy dla kolumn';
$strColumn = 'Kolumna';
$strColumnNames = 'Nazwy kolumn';
$strCommand = 'Polecenie';
$strComments = 'Komentarze';
$strCompleteInserts = 'Pełne dodania';
$strCompression = 'Kompresja';
$strConfigFileError = 'phpMyAdmin nie zdołał odczytać twojego pliku konfiguracj!<br />Może się to zdarzyć, jeśli php znajdzie w nim błąd składniowy lub nie może znaleźć tego pliku.<br />Proszę wywołać bezpośrednio plik konfiguracyjny używając poniższego linku i odczytać otrzymane komunikat(y) o błędach. W większości przypadków brakuje gdzieś cudzysłowu lub średnika.<br />Jeżeli otrzymasz pustą stronę, wszystko jest w porządku.';
$strConfigureTableCoord = 'Proszę skonfigurować współrzędnie dla tabeli %s';
$strConfirm = 'Czy na pewno to zrobić?';
$strConnections = 'Połączenia';
$strCookiesRequired = 'Odtąd musi być włączona obsługa "cookies".';
$strCopyTable = 'Skopiuj tabelę do (bazadanych<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s została skopiowana do %s.';
$strCouldNotKill = 'phpMyAdminowi nie udało się unicestwić wątku %s. Prawdopodobnie został on już zamknięty.';
$strCreate = 'Utworzenie';
$strCreateIndex = 'Utworzenie indeksu dla %s kolumn';
$strCreateIndexTopic = 'Utworzenie nowego indeksu';
$strCreateNewDatabase = 'Utworzenie nowej bazy danych';
$strCreateNewTable = 'Utworzenie nowej tabeli dla bazy danych %s';
$strCreatePage = 'Utworzenie nowej strony';
$strCreatePdfFeat = 'Tworzenie PDF-ów';
$strCriteria = 'Kryteria';

$strData = 'Dane';
$strDatabase = 'Baza danych ';
$strDatabaseHasBeenDropped = 'Baza danych %s została usunięta.';
$strDatabases = 'bazy danych';
$strDatabasesStats = 'Statystyki baz danych';
$strDatabaseWildcard = 'Baza danych (dozwolone maski):';
$strDataDict = 'Słownik danych';
$strDataOnly = 'Tylko dane';
$strDefault = 'Domyślnie';
$strDelete = 'Skasowanie';
$strDeleted = 'Rekord został skasowany';
$strDeletedRows = 'Skasowane rekordy:';
$strDeleteFailed = 'Kasowanie nie powiodło się!';
$strDeleteUserMessage = 'Usunąłeś uzytkownika  %s.';
$strDescending = 'Malejąco';
$strDisabled = 'wyłączone';
$strDisplay = 'Pokaż';
$strDisplayFeat = 'Funkcje wyświetlania';
$strDisplayOrder = 'Kolejność wyświetlania:';
$strDisplayPDF = 'Wyświetl schemat PDF';
$strDoAQuery = 'Wykonaj "zapytanie przez przykład" (znak globalny: "%")';
$strDocu = 'Dokumentacja';
$strDoYouReally = 'Czy na pewno wykonać ';
$strDrop = 'Usunięcie';
$strDropDB = 'Usunięcie bazy danych %s';
$strDropTable = 'Usunięcie tabeli';
$strDumpingData = 'Zrzut danych tabeli';
$strDumpXRows = 'Zrzuć %s wierszy zaczynając od wiersza %s.';
$strDynamic = 'zmienny';

$strEdit = 'Edycja';
$strEditPDFPages = 'Edycja stron PDF';
$strEditPrivileges = 'Edycja uprawnień';
$strEffective = 'Efektywne';
$strEmpty = 'Wyczyszczenie';
$strEmptyResultSet = 'MySQL zwrócił pusty wynik (np. zero rekordów).';
$strEnabled = 'włączone';
$strEnd = 'Koniec';
$strEndCut = 'KONIEC CUT';
$strEndRaw = 'KONIEC RAW';
$strEnglishPrivileges = ' Uwaga: Uprawnienia MySQL są oznaczone w jęz. angielskim ';
$strError = 'Błąd';
$strExplain = 'Wyjaśnienie SQL';
$strExport = 'Eksport';
$strExportToXML = 'Eksport do formatu XML';
$strExtendedInserts = 'Rozszerzone dodania';
$strExtra = 'Dodatkowy';

$strFailedAttempts = 'Nieudane próby';
$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s zostało usunięte';
$strFields = 'Pola';
$strFieldsEmpty = ' Pole count jest puste! ';
$strFieldsEnclosedBy = 'Pola zawarte w';
$strFieldsEscapedBy = 'Pola poprzedzone przez';
$strFieldsTerminatedBy = 'Pola oddzielane przez';
$strFixed = 'stały';
$strFlushTable = 'Przeładowanie tabeli ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Brakująca wartość w formularzu!';
$strFullText = 'Pełny tekst';
$strFunction = 'Funkcja';

$strGenBy = 'Wygenerowany przez';
$strGeneralRelationFeat = 'Ogólne funkcje relacyjne';
$strGenTime = 'Czas wygenerowania';
$strGlobalValue = 'Wartość globalna';
$strGo = 'Wykonanie';
$strGrants = 'Nadanie';
$strGzip = '".gz"';

$strHasBeenAltered = 'zostało zamienione.';
$strHasBeenCreated = 'zostało utworzone.';
$strHaveToShow = 'Musisz wybraż przynajmniej jedną kolumnę do wyświetlenia';
$strHome = 'Wejście';
$strHomepageOfficial = 'Oficjalna strona phpMyAdmina';
$strHomepageSourceforge = 'Pobranie wersji Sourceforge phpMyAdmina';
$strHost = 'Host';
$strHostEmpty = 'Brak nazwy hosta!';

$strId = 'ID';
$strIdxFulltext = 'Pełny tekst';
$strIfYouWish = 'Prosze podać listę kolumn rozdzieloną przecinkami aby załadować tylko wybrane kolumny.';
$strIgnore = 'Ignoruj';
$strImportDocSQL = 'Import plików docSQL';
$strIndex = 'Indeks';
$strIndexes = 'Indeksy';
$strIndexHasBeenDropped = 'Klucz %s został usunięty';
$strIndexName = 'Nazwa indeksu :';
$strIndexType = 'Rodzaj indeksu :';
$strInsecureMySQL = 'Twój plik konfiguracyjny zawiera ustawienia (konto roota bez hasła), które odpowiadaja domyślnemu uprzywilejowanemu kontu MySQL. Twój serwer MySQL działa z takim domyślnym ustawieniem, jest otwarty dla włamywaczy i naprawdę ta luka w bezpieczeństwie powinna zostać naprawiona.';
$strInsert = 'Dodanie';
$strInsertAsNewRow = 'Dodanie jako nowego rekordu';
$strInsertedRows = 'Wprowadzone rekordy:';
$strInsertNewRow = 'Dodanie nowego rekordu';
$strInsertTextfiles = 'Dodanie pliku tekstowego do tabeli';
$strInstructions = 'Instrukcje';
$strInUse = 'w użyciu';
$strInvalidName = '"%s" jest słowem zarezerwowanym, nie można użyć go jako nazwy bazy danych/tabeli/pola.';

$strKeepPass = 'Nie zmieniaj hasła';
$strKeyname = 'Nazwa klucza';
$strKill = 'Zabicie';

$strLandscape = 'Orientacja pozioma';
$strLength = 'Długość';
$strLengthSet = 'Długość/Wartości*';
$strLimitNumRows = 'rekordów na stronie';
$strLineFeed = 'Kod wysunięcia linii: \\n';
$strLines = 'Linie';
$strLinesTerminatedBy = 'Linie zakończone przez';
$strLinkNotFound = 'Link nie znaleziony';
$strLinksTo = 'Linki do';
$strLocationTextfile = 'Lokalizacja pliku tekstowego';
$strLogin = 'Login';
$strLogPassword = 'Hasło:';
$strLogUsername = 'Użytkownik:';
$strLogout = 'Wylogowanie';

$strMissingBracket = 'Brakujący nawias';
$strModifications = 'Modyfikacje zostały zapamiętane';
$strModify = 'Modifikacja';
$strModifyIndexTopic = 'Modyfikacja indeksu';
$strMoreStatusVars = 'Więcej zmiennych statusu';
$strMoveTable = 'Przeniesienie tabeli do (bazadanych<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s została przeniosna do %s.';
$strMySQLCharset = 'System kodowania znaków dla MySQL';
$strMySQLReloaded = 'MySQL przeładowany.';
$strMySQLSaid = 'MySQL zwrócił komunikat: ';
$strMySQLServerProcess = 'MySQL %pma_s1% uruchomiony na %pma_s2% jako %pma_s3%';
$strMySQLShowProcess = 'Pokazuj procesy';
$strMySQLShowStatus = 'Informacje o stanie serwera MySQL';
$strMySQLShowVars = 'Zmienne systemowe serwera MySQL';

$strName = 'Nazwa';
$strNext = 'Następne';
$strNo = 'Nie';
$strNoDatabases = 'Brak baz danych';
$strNoDescription = 'brak opisu';
$strNoDropDatabases = 'Polecenie "DROP DATABASE" jest zablokowane.';
$strNoExplain = 'Pomiń wyjaśnienie SQL';
$strNoFrames='phpMyAdmin jest bardziej przyjazny w przeglądarkach <b>obsługujących ramki</b>';
$strNoIndex = 'Brak zdefiniowanego indeksu!';
$strNoIndexPartsDefined = 'Brak zdefiniowanych części indeksu!';
$strNoModification = 'Bez zmian';
$strNone = 'Brak';
$strNoPassword = 'Brak hasła';
$strNoPhp = 'bez kodu PHP';
$strNoPrivileges = 'Brak uprawnień';
$strNoQuery = 'Brak zapytania SQL!';
$strNoRights = 'Brak wystarczajacych uprawnień!';
$strNoTablesFound = 'Nie znaleziono tabeli w bazie danych.';
$strNotNumber = 'To nie jest liczba!';
$strNotOK = 'błąd';
$strNotSet = 'Tabela <b>%s</b> nie została znaleziona lub nie jest ustawiona w %s';
$strNotValidNumber = ' nie jest poprawnym numerem rekordu!';
$strNoUsersFound = 'Nie znaleziono użytkownika(ów).';
$strNoValidateSQL = 'Pomiń sprawdzanie poprawności SQL';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s trafień wewnątrz tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>W sumie:</b> <i>%s</i> trafień';
$strNumTables = 'Tabele';

$strOftenQuotation = 'Znaki cudzysłowu. OPCJONALNIE oznacza, że tylko pola char oraz varchar są zawarte w "cudzysłowach".';
$strOK = 'OK';
$strOperations = 'Operacje';
$strOptimizeTable = 'Optymalizacja tabeli';
$strOptionalControls = 'Opcjonalnie. Określenie w jaki sposób zapisać lub odczytać znaki specjalne.';
$strOptionally = 'OPCJONALNIE';
$strOptions = 'Opcje';
$strOr = 'Lub';
$strOverhead = 'Nadmiar';

$strPageNumber = 'Numer strony:';
$strPartialText = 'Skrócony tekst';
$strPassword = 'Hasło';
$strPasswordEmpty = 'Puste hasło!';
$strPasswordNotSame = 'Hasła nie są identyczne!';
$strPdfDbSchema = 'Schemet bazy danych "%s" - strona %s';
$strPdfInvalidPageNum = 'Niezdefiniowany numer strony PDF!';
$strPdfInvalidTblName = 'Tabela "%s" nie istnieje!';
$strPdfNoTables = 'Brak tabel';
$strPerHour = 'na godzinę';
$strPhp = 'Utwórz kod PHP';
$strPHP40203 = 'Używasz PHP w wersji 4.2.3, która ma poważny błąd w obsłudze napisów wielobajtowych (mbstring). Zobacz raport na temat błędów PHP nr 19404. Nie zaleca się używania tej wersji PHP z phpMyAdminem.';
$strPHPVersion = 'Wersja PHP';
$strPmaDocumentation = 'Dokumentacja phpMyAdmina';
$strPmaUriError = 'Dyrektywa <tt>$cfg[\'PmaAbsoluteUri\']</tt> musi być ustawiona w pliku konfiguracyjnym!';
$strPortrait = 'Orientacja pionowa';
$strPos1 = 'Początek';
$strPrevious = 'Poprzednie';
$strPrimary = 'Podstawowy';
$strPrimaryKey = 'Podstawowy klucz';
$strPrimaryKeyHasBeenDropped = 'Klucz podstawowy został usunięty';
$strPrimaryKeyName = 'Nazwą podstawowego klucza musi być... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musi</b> być nazwą <b>jedynie</b> klucza podstawowego!)';
$strPrint = 'Drukowanie';
$strPrintView = 'Widok do wydruku';
$strPrivileges = 'Uprawnienia';
$strProcesslist = 'Lista procesów';
$strProperties = 'Własciwości';
$strPutColNames = 'Umieść nazwy pól w pierwszym rekordzie';

$strQBE = 'Zapytanie przez przykład';
$strQBEDel = 'Usuń';
$strQBEIns = 'Wstaw';
$strQueryOnDb = 'Zapytanie SQL dla bazy danych <b>%s</b>:';
$strQueryStatistics = '<b>Statystyki zapytań</b>: Od rozpoczęcia jego pracy, do serwera zostało wysłanych %s zapytań.';
$strQueryType = 'Rodzaj zapytania';

$strReceived = 'Otrzymane';
$strRecords = 'Rekordy';
$strReferentialIntegrity = 'Sprawdzenie spójności powiązań:';
$strRelationalSchema = 'Schemat relacyjny';
$strRelationNotWorking = 'Dodatkowe możliwości pracy z połączonymi tabelami zostały wyłączone. Aby dowiedzieć się, dlaczego - kliknij %stutaj%s.';
$strRelationView = 'Widok relacyjny';
$strReloadFailed = 'Nie powiodło się przeładowanie MySQL.';
$strReloadMySQL = 'Przeładowanie MySQL';
$strRememberReload = 'Proszę pamiętać o przeładowaniu serwera.';
$strRenameTable = 'Zmiana nazwy tabeli na';
$strRenameTableOK = 'Tabela %s ma zmienioną nazwę na %s';
$strRepairTable = 'Naprawienie tabeli';
$strReplace = 'Zamiana';
$strReplaceTable = 'Zamiana danych tabeli z plikiem';
$strReset = 'Reset';
$strReType = 'Ponownie';
$strRevoke = 'Cofnięcie';
$strRevokeGrant = 'Cofnięcie uprawnień';
$strRevokeGrantMessage = 'Cofnięte zostały uprawnienia dla %s';
$strRevokeMessage = 'Cofnięte zostały uprawnienia dla %s';
$strRevokePriv = 'Cofnięcie uprawnień';
$strRowLength = 'Długość rekordu';
$strRows = 'Rekordów';
$strRowSize = ' Rozmiar rekordu ';
$strRowsFrom = 'rekordów począwszy od';
$strRowsModeHorizontal= 'poziomo';
$strRowsModeOptions= 'w trybie %s powtórz nagłówki po %s komórkach';
$strRowsModeVertical= 'pionowo';
$strRowsStatistic = 'Statystyka rekordów';
$strRunning = 'uruchomiony na %s';
$strRunQuery = 'Wykonanie zapytania';
$strRunSQLQuery = 'Wykonanie zapytania/zapytań SQL do bazy danych %s';

$strSave = 'Zachowanie';
$strScaleFactorSmall = 'Współczynnik skali jest za mały, by schemat zmieścił się na jednej stronie';
$strSearch = 'Szukaj';
$strSearchFormTitle = 'Szukaj w bazie danych';
$strSearchInTables = 'Wewnątrz tabel(i):';
$strSearchNeedle = 'Szukane słowo (słowa) lub wartość (wartości)  (symbol wieloznaczny: "%"):';
$strSearchOption1 = 'przynajmniej jedno ze słów';
$strSearchOption2 = 'wszystkie słowa';
$strSearchOption3 = 'cała fraza';
$strSearchOption4 = 'jako wyrażenie regularne';
$strSearchResultsFor = 'Szukaj w rezultatach dla "<i>%s</i>" %s:';
$strSearchType = 'Znajdź:';
$strSelect = 'Wybór';
$strSelectADb = 'Proszę wybrać bazę danych';
$strSelectAll = 'Zaznaczenie wszystkich';
$strSelectFields = 'Wybór pól (co najmniej jedno):';
$strSelectNumRows = 'w zapytaniu';
$strSelectTables = 'Wybierz tabele';
$strSend = 'wysłanie';
$strSent = 'Wysłane';
$strServer = 'Serwer %s';
$strServerChoice = 'Wybór serwera';
$strServerStatus = 'Informacje o działaniu serwera';
$strServerStatusUptime = 'Ten serwer MySQL działa przez %s. Rozpoczęcie jego pracy: %s.';
$strServerTabProcesslist = 'Procesy';
$strServerTabStatus = 'Status';
$strServerTabVariables = 'Zmienne';
$strServerTrafficNotes = '<b>Ruch na serwerze</b>: Poniższe tabele pokazują statystyki ruchu na tym serwerze MySQL od rozpoczęcia jego pracy.';
$strServerVars = 'Zmienne i ustawienia serwera';
$strServerVersion = 'Wersja serwera';
$strSessionValue = 'Wartość sesji';
$strSetEnumVal = 'Jeżeli pole jest typu "ENUM" lub "SET", wartości wprowadza się w formacie: \'a\',\'b\',\'c\'...<br />Jeżeli potrzeba wprowadzić odwrotny ukośnik ("\") lub apostrof ("\'"), należy je poprzedzić odwrotnym ukośnikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strShow = 'Pokazanie';
$strShowAll = 'Pokazanie wszystkiego';
$strShowColor = 'Pokaż kolor';
$strShowCols = 'Pokazanie kolumn';
$strShowDatadictAs = 'Format słownika danych';
$strShowGrid = 'Pokaż siatkę';
$strShowingRecords = 'Pokazanie rekordów ';
$strShowPHPInfo = 'Informacje o PHP';
$strShowTableDimension = 'Pokaż wymiary tabel';
$strShowTables = 'Pokazanie tabel';
$strShowThisQuery = ' Ponowne wywołanie tego zapytania ';
$strSingly = '(pojedynczo)';
$strSize = 'Rozmiar';
$strSort = 'Sortuj';
$strSpaceUsage = 'Wykorzystanie przestrzeni';
$strSplitWordsWithSpace = 'Słowa są rozdzielane znakiem spacji (" ").';
$strSQL = 'SQL';
$strSQLParserBugMessage = 'Istnieje szanse, że właśnie znalazłeś błąd w analizatorze składni SQL. Zbadaj bliżej swoje zapytanie i sprawdź, czy cudzysłowy są poprawne i dobrze sparowane. Inną możliwą przyczyną niepowodzenia może być to, że wysyłasz plik ze znakami binarnymi poza obszarem tekstu ujętego w cudzysłowy. Możesz również sprawdzić swoje zapytanie SQL poprzez linię poleceń MySQL. W znalezieniu przyczyny problemu może pomóć także - jeśli się pojawi - poniższy opis błędu serwera MySQL. Jeśli nadam masz problemy lub analizator składni zgłasza usterkę a linia poleceń - nie, ogranicz sekwencję zapytań SQL do pojedynczego, które powoduje problemy i zgłość błąd, dołączając fragment danych zawarty w poniższej sekcji CUT:';
$strSQLParserUserError = 'Wygląda na to, że w twoim zapytaniu SQL jest błąd. W znalezieniu przyczyny problemu może pomóć także - jeśli się pojawi - poniższy opis błędu serwera MySQL.';
$strSQLQuery = 'zapytanie SQL';
$strSQLResult = 'Rezultat SQL';
$strSQPBugInvalidIdentifer = 'Nieprawidłowy identyfikator';
$strSQPBugUnclosedQuote = 'Niezamknięty cudzysłów';
$strSQPBugUnknownPunctuation = 'Nieznany znak przestankowy';
$strStatement = 'Cecha';
$strStatus = 'Status';
$strStrucCSV = 'dane CSV';
$strStrucData = 'Struktura i dane';
$strStrucDrop = 'Dodanie \'drop table\'';
$strStrucExcelCSV = 'CSV dla MS Excel';
$strStrucOnly = 'Tylko struktura';
$strStructPropose = 'Propozycja struktury tabeli';
$strStructure = 'Struktura';
$strSubmit = 'Wysłanie';
$strSuccess = 'Zapytanie SQL zostało pomyślnie wykonane';
$strSum = 'Suma';

$strTable = 'Tabela';
$strTableComments = 'Komentarze tabeli';
$strTableEmpty = 'Brak nazwy tabeli!';
$strTableHasBeenDropped = 'Tabela %s została usunięta';
$strTableHasBeenEmptied = 'Tabela %s została opróżniona';
$strTableHasBeenFlushed = 'Tabela %s została przeładowana';
$strTableMaintenance = 'Zarządzanie tabelą';
$strTableOfContents = 'Spis treści';
$strTables = '%s tabel(a)';
$strTableStructure = 'Struktura tabeli dla ';
$strTableType = 'Typ tabeli';
$strTextAreaLength = ' To pole może nie być edytowalne,<br /> z powodu swojej długości ';
$strTheContent = 'Zawartość pliku została dołączona.';
$strTheContents = 'Zawartość pliku zastapiła dane wybranej tabeli, których podstawowy lub unikalny klucz był identyczny.';
$strTheTerminator = 'Znak rozdzielający pola.';
$strThreadSuccessfullyKilled = 'Wątek %s został pomyślnie unicestwiony.';
$strTime = 'Czas';
$strTotal = 'wszystkich';
$strTotalUC = 'Sumarycznie';
$strTraffic = 'Ruch';
$strType = 'Typ';

$strUncheckAll = 'Odznaczenie wszystkich';
$strUnique = 'Unikalny';
$strUnselectAll = 'Odznaczenie wszystkich';
$strUpdatePrivMessage = 'Uaktualniłeś uprawnienia dla %s.';
$strUpdateProfile = 'Uaktualnienie profilu:';
$strUpdateProfileMessage = 'Profil został uaktualniony.';
$strUpdateQuery = 'Zmiana zapytania';
$strUsage = 'Wykorzystanie';
$strUseBackquotes = 'Użycie cudzysłowów z nazwami tabel i pól';
$strUser = 'Użytkownik';
$strUserEmpty = 'Brak nazwy użytkownika!';
$strUserName = 'Nazwa użytkownika';
$strUsers = 'Użytkownicy';
$strUseTables = 'Użycie tabel';

$strValidateSQL = 'Sprawdzanie proprawności SQL';
$strValidatorError = 'Analizator składni SQL nie mógł zostać zainicjalizowany. Sprawdź, czy zainstalowane są niezbędne rozszerzenia php, tak jak zostało to opisane w %sdokumentacji%s.';
$strValue = 'Wartość';
$strVar = 'Zmienna';
$strViewDump = 'Zrzut tabeli';
$strViewDumpDB = 'Zrzut bazy danych';

$strWebServerUploadDirectory = 'katalog serwera www dla uploadu';
$strWebServerUploadDirectoryError = 'Katalog ustalony dla uploadu jest nieosiągalny';
$strWelcome = 'Witamy w %s';
$strWithChecked = 'Zaznaczone:';
$strWrongUser = 'Błędne pola użytkownik/hasło. Brak dostępu.';

$strYes = 'Tak';

$strZip = '".zip"';

// To translate
$strLaTeX = 'LaTeX';  //to translate

$strAdministration = 'Administration'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strUserOverview = 'User overview'; //to translate
$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate
$strOriginalInterface = 'original interface';  //to translate
?>
