<?php
/* $Id$ */

/**
 * Czech language file by
 *   Michal �iha� <nijel at users.sourceforge.net>
 */

$charset = 'windows-1250';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajt�', 'kB', 'MB', 'GB');

$day_of_week = array('Ned�le', 'Pond�l�', '�ter�', 'St�eda', '�tvrtek', 'P�tek', 'Sobota');
$month = array('ledna', '�nora', 'b�ezna', 'dubna', 'kv�tna', '�ervna', '�ervence', 'srpna', 'z���', '��jna', 'listopadu', 'prosince');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%a %e. %b %Y, %H:%M';

$timespanfmt = '%s dn�, %s hodin, %s minut a %s sekund';

$strAPrimaryKey = 'V&nbsp;tabulce %s byl vytvo�en prim�rn� kl��';
$strAbortedClients = 'P�eru�en�';
$strAccessDenied = 'P��stup odep�en';
$strAction = 'Akce';
$strAddDeleteColumn = 'P�idat/Smazat sloupec';
$strAddDeleteRow = 'P�idat/Smazat ��dek s&nbsp;podm�nkou';
$strAddNewField = 'P�idat nov� sloupec';
$strAddPriv = 'P�idat nov� privilegium';
$strAddPrivMessage = 'Opr�vn�n� bylo p�id�no.';
$strAddSearchConditions = 'P�idat vyhled�vac� parametry (obsah dotazu po p��kazu "WHERE"):';
$strAddToIndex = 'P�idat do indexu  &nbsp;%s&nbsp;sloupc�';
$strAddUser = 'P�idat nov�ho u�ivatele';
$strAddUserMessage = 'U�ivatel byl p�id�n.';
$strAdministration = 'Spr�va';
$strAffectedRows = 'Ovlivn�n� ��dky:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Zp�t';
$strAfterInsertNewInsert = 'Vlo�it dal�� ��dek';
$strAll = 'V�echno';
$strAllTableSameWidth = 'Zobrazit v�echny tabulky stejnou ���kou';
$strAlterOrderBy = 'Zm�nit po�ad� tabulky podle';
$strAnIndex = 'K&nbsp;tabulce %s byl p�id�n index';
$strAnalyzeTable = 'Analyzovat tabulku';
$strAnd = 'a';
$strAny = 'Jak�koliv';
$strAnyColumn = 'Jak�koliv sloupec';
$strAnyDatabase = 'Jak�koliv datab�ze';
$strAnyHost = 'Jak�koliv po��ta�';
$strAnyTable = 'Jak�koliv tabulka';
$strAnyUser = 'Jak�koliv u�ivatel';
$strAscending = 'Vzestupn�';
$strAtBeginningOfTable = 'Na za��tku tabulky';
$strAtEndOfTable = 'Na konci tabulky';
$strAttr = 'Vlastnosti';

$strBack = 'Zp�t';
$strBeginCut = 'ZA��TEK V�PISU';
$strBeginRaw = 'ZA��TEK V�PISU';
$strBinary = ' Bin�rn� ';
$strBinaryDoNotEdit = ' Bin�rn� - neupravujte ';
$strBookmarkDeleted = 'Polo�ka byla smaz�na z&nbsp;obl�ben�ch.';
$strBookmarkLabel = 'N�zev';
$strBookmarkQuery = 'Obl�ben� SQL dotaz';
$strBookmarkThis = 'P�idat tento SQL dotaz do obl�ben�ch';
$strBookmarkView = 'Jen zobrazit';
$strBrowse = 'Proj�t';
$strBzError = 'phpMyAdminovi se nepoda�ilo zkomprimovat v�pis, proto�e roz���en� pro kompresi Bz2 je v&nbsp;t�to verzi php chybn�. Doporu�ujeme nastavit <code>$cfg[\'BZipDump\']</code> v&nbsp;nastaven�ch phpMyAdmina na <code>FALSE</code>. Pokud chcete pou��vat kompresi Bz2, m�li byste nainstalovat nov�j�� verzi php. V�ce informac� o&nbsp;tomto probn�lu je u popisu chyby %s.';
$strBzip = '"zabzipov�no"';

$strCannotLogin = 'Nepoda�ilo se p�ihl�en� k MySQL serveru';
$strCantLoadMySQL = 'nelze nahr�t roz���en� pro MySQL,<br />pros�m zkontrolujte nastaven� PHP.';
$strCantLoadRecodeIconv = 'Nelze nahr�t roz���en� iconv ani recode pot�ebn� pro p�evod znakov�ch sad. Upravte nastaven� php tak aby umo��ovalo pou��t tyto roz���en� nebo vypn�te p�evod znakov�ch sad v&nbsp;phpMyAdminu.';
$strCantRenameIdxToPrimary = 'Index nem��ete p�ejmenovat na "PRIMARY"!';
$strCantUseRecodeIconv = 'Nelze pou��t funkce iconv ani libiconv ani recode_string, p�esto�e roz���en� jsou nahr�na. Zkontrolujte nastaven� php.';
$strCardinality = 'Mohutnost';
$strCarriage = 'N�vrat voz�ku (CR): \\r';
$strChange = 'Zm�nit';
$strChangeDisplay = 'Zvolte kter� sloupce zobrazit';
$strChangePassword = 'Zm�nit heslo';
$strCharsetOfFile = 'Znakov� sada souboru:';
$strCheckAll = 'Za�krtnout v�e';
$strCheckDbPriv = 'Zkontrolovat opr�vn�n� pro datab�zi';
$strCheckTable = 'Zkontrolovat tabulku';
$strChoosePage = 'Zvolte str�nku, kterou chcete zm�nit';
$strColComFeat = 'Zobrazuji koment��e sloupc�';
$strColumn = 'Sloupec';
$strColumnNames = 'N�zvy sloupc�';
$strCommand = 'P��kaz';
$strComments = 'Koment��e';
$strCompleteInserts = '�pln� inserty';
$strCompression = 'Komprese';
$strConfigFileError = 'phpMyAdmin nemohl na��st konfigura�n� soubor!<br />Tato chyba m��e nastat pokud v&nbsp;n�m php najde chybu nebo nem��e tento soubor naj�t.<br />Po kliknut� na n�sleduj�c� odkaz se konfigurace spust� a budou zobrazeny informace o&nbsp;chyb�, ke kter� do�lo. Pak opravte tuto chybu (nej�ast�ji se jedn� o&nbsp;chyb�j�c� st�edn�k).<br />Pokud z�sk�te pr�zdnou str�nku, v�echno je v&nbsp;po��dku.';
$strConfigureTableCoord = 'Pros�m, nastavte sou�adnice pro tabulku %s';
$strConfirm = 'Opravdu chcete toto prov�st?';
$strConnections = 'P�ipojen�';
$strCookiesRequired = 'B�hem tohoto kroku mus�te m�t povoleny cookies.';
$strCopyTable = 'Kop�rovat tabulku do (datab�ze<b>.</b>tabulka):';
$strCopyTableOK = 'Tabulka %s byla zkop�rov�na do %s.';
$strCouldNotKill = 'phpMyAdminovi se nepoda�ilo zab�t vl�kno %s. Pravd�podobne jeho b�h ji� skon�il.';
$strCreate = 'Vytvo�it';
$strCreateIndex = 'Vytvo�it index na&nbsp;%s&nbsp;sloupc�ch';
$strCreateIndexTopic = 'Vytvo�it nov� index';
$strCreateNewDatabase = 'Vytvo�it novou datab�zi';
$strCreateNewTable = 'Vytvo�it novou tabulku v&nbsp;datab�zi %s';
$strCreatePage = 'Vytvo�it novou str�nku';
$strCreatePdfFeat = 'Vytv��en� PDF';
$strCriteria = 'Podm�nka';

$strData = 'Data';
$strDataDict = 'Datov� slovn�k';
$strDataOnly = ' Jen data';
$strDatabase = 'Datab�ze ';
$strDatabaseHasBeenDropped = 'Datab�ze %s byla zru�ena.';
$strDatabaseWildcard = 'Datab�ze (z�stupn� znaky povoleny):';
$strDatabases = 'datab�ze';
$strDatabasesStats = 'Statistiky datab�z�';
$strDefault = 'V�choz�';
$strDelete = 'Smazat';
$strDeleteFailed = 'Smaz�n� selhalo!';
$strDeleteUserMessage = 'Byl smaz�n u�ivatel %s.';
$strDeleted = '��dek byl smaz�n';
$strDeletedRows = 'Smazan� ��dky:';
$strDescending = 'Sestupn�';
$strDisabled = 'Vypnuto';
$strDisplay = 'Zobrazit';
$strDisplayFeat = 'Zobrazen� funkc�';
$strDisplayOrder = 'Se�adit podle:';
$strDisplayPDF = 'Zobrazit jako sch�ma v&nbsp;PDF';
$strDoAQuery = 'Prov�st "dotaz podle p��kladu" (z�stupn� znak: "%")';
$strDoYouReally = 'Opravdu si p�ejete vykonat p��kaz';
$strDocu = 'Dokumentace';
$strDrop = 'Odstranit';
$strDropDB = 'Odstranit datab�zi %s';
$strDropTable = 'Smazat tabulku';
$strDumpXRows = 'Vypsat %s ��dk� od %s.';
$strDumpingData = 'Dumpuji data pro tabulku';
$strDynamic = 'dynamick�';

$strEdit = 'Upravit';
$strEditPDFPages = 'Upravit PDF str�nky';
$strEditPrivileges = 'Upravit opr�vn�n�';
$strEffective = 'Efektivn�';
$strEmpty = 'Vypr�zdnit';
$strEmptyResultSet = 'MySQL vr�til pr�zdn� v�sledek (tj. nulov� po�et ��dk�).';
$strEnabled = 'Zapnuto';
$strEnd = 'Konec';
$strEndCut = 'KONEC V�PISU';
$strEndRaw = 'KONEC V�PISU';
$strEnglishPrivileges = 'Pozn�mka: n�zvy opr�vn�n� v&nbsp;MySQL jsou uv�d�ny anglicky';
$strError = 'Chyba';
$strExplain = 'Vysv�tlit (EXPLAIN) SQL';
$strExport = 'Export';
$strExportToXML = 'Export do XML';
$strExtendedInserts = 'Roz���en� inserty';
$strExtra = 'Extra';

$strFailedAttempts = 'Nepoveden�ch pokus�';
$strField = 'Sloupec';
$strFieldHasBeenDropped = 'Sloupec %s byl odstran�n';
$strFields = 'Sloupce';
$strFieldsEmpty = ' Nebyl zad�n po�et sloupc�! ';
$strFieldsEnclosedBy = 'N�zvy sloupc� uzav�en� do';
$strFieldsEscapedBy = 'N�zvy sloupc� escapov�ny';
$strFieldsTerminatedBy = 'Sloupce odd�len�';
$strFixed = 'pevn�';
$strFlushPrivilegesNote = 'Pozn�mka: phpMyAdmin z�sk�v� opr�vn�n� p��mo z&nbsp;tabulek MySQL. Obsah t�chto tabulek se m��e li�it od opr�vn�n�, kter� server pr�v� pou��v�, pokud byly tyto tabulky upravov�ny. V&nbsp;tomto p��pad� je vhodn� prov�st %sznovuna�ten� opr�vn�n�%s p�ed pokra�ov�n�m.';
$strFlushTable = 'Vypr�zdnit vyrovn�vac� pam� pro tabulku ("FLUSH")';
$strFormEmpty = 'Chyb�j�c� hodnota ve formul��i!';
$strFormat = 'Form�t';
$strFullText = 'Cel� texty';
$strFunction = 'Funkce';

$strGenBy = 'Vygeneroval';
$strGenTime = 'Vygenerov�no';
$strGeneralRelationFeat = 'Obecn� funkce relac�';
$strGlobalPrivileges = 'Glob�ln� opr�vn�n�';
$strGlobalValue = 'Glob�ln� hodnota';
$strGo = 'Prove�';
$strGrantOption = 'P�id�lov�n�';
$strGrants = 'P�id�lov�n�';
$strGzip = '"zagzipov�no"';

$strHasBeenAltered = 'byla zm�n�na.';
$strHasBeenCreated = 'byla vytvo�ena.';
$strHaveToShow = 'Mus�te volit alespo� jeden sloupec, kter� chcete zobrazit.';
$strHome = 'Hlavn� strana';
$strHomepageOfficial = 'Ofici�ln� str�nka phpMyAdmina';
$strHomepageSourceforge = 'Nov� str�nka phpMyAdmina';
$strHost = 'Po��ta�';
$strHostEmpty = 'Jm�no po��ta�e je pr�zdn�!';

$strId = 'ID';
$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'Pokud si p�ejete nat�hnout jen vybran� sloupce z&nbsp;tabulky, napi�te je jako seznam sloupc� odd�len�ch ��rkou.';
$strIgnore = 'Ignorovat';
$strImportDocSQL = 'Importovat soubory docSQL';
$strInUse = 'pr�v� se pou��v�';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s byl odstran�n';
$strIndexName = 'Jm�no indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strIndexes = 'Indexy';
$strInsecureMySQL = 'V� konfigura�n� soubor obsahuje nastaven� (u�ivatel root bez hesla), kter� je v�choz� pro MySQL. V� MySQL server s&nbsp;t�mto v�choz�m nastaven�m je snadno napadnuteln�, a proto byste m�li zm�nit toto nastaven� a t�m podstatn� zv��it bezpe�nost Va�eho serveru.';
$strInsert = 'Vlo�it';
$strInsertAsNewRow = 'Vlo�it jako nov� ��dek';
$strInsertNewRow = 'Vlo�it nov� ��dek';
$strInsertTextfiles = 'Vlo�it textov� soubory do tabulky';
$strInsertedRows = 'Vlo�eno ��dk�:';
$strInstructions = 'Instrukce';
$strInvalidName = '"%s" je rezervovan� slovo a proto ho nem��ete po��t jako jm�no datab�ze/tabulky/sloupce.';

$strKeepPass = 'Nem�nit heslo';
$strKeyname = 'Kl��ov� n�zev';
$strKill = 'Zab�t';

$strLaTeX = 'LaTeX';
$strLandscape = 'Na ���ku';
$strLength = 'D�lka';
$strLengthSet = 'D�lka/Mno�ina*';
$strLimitNumRows = 'z�znam� na str�nku';
$strLineFeed = 'Ukon�en� ��dku (Linefeed): \\n';
$strLines = '��dek';
$strLinesTerminatedBy = '��dky ukon�en�';
$strLinkNotFound = 'Odkaz nenalezen';
$strLinksTo = 'Odkazuje na';
$strLocationTextfile = 'textov� soubor';
$strLogPassword = 'Heslo:';
$strLogUsername = 'Jm�no:';
$strLogin = 'P�ihl�en�';
$strLogout = 'Odhl�sit se';

$strMissingBracket = 'Chyb� z�vorka';
$strModifications = 'Zm�ny byly ulo�eny';
$strModify = '�pravy';
$strModifyIndexTopic = 'Upravit index';
$strMoreStatusVars = 'Dal�� informace o&nbsp;stavu';
$strMoveTable = 'P�esunout tabulku do (datab�ze<b>.</b>tabulka):';
$strMoveTableOK = 'Tabulka %s byla p�esunuta do %s.';
$strMySQLCharset = 'Znakov� sada v&nbsp;MySQL';
$strMySQLReloaded = 'MySQL znovu na�teno.';
$strMySQLSaid = 'MySQL hl�s�: ';
$strMySQLServerProcess = 'MySQL %pma_s1% spu�t�n� na %pma_s2%, p�ihl�en %pma_s3%';
$strMySQLShowProcess = 'Zobrazit procesy';
$strMySQLShowStatus = 'Uk�zat MySQL informace o&nbsp;b�hu';
$strMySQLShowVars = 'Uk�zat MySQL syst�mov� prom�nn�';

$strName = 'N�zev';
$strNext = 'Dal��';
$strNo = 'Ne';
$strNoDatabases = '��dn� datab�ze';
$strNoDescription = '��dn� popisek';
$strNoDropDatabases = 'P��kaz "DROP DATABASE" je vypnut�.';
$strNoExplain = 'Bez vysv�tlen� (EXPLAIN) SQL';
$strNoFrames = 'phpMyAdmin se l�pe pou��v� v&nbsp;prohl�e�i podporuj�c�m r�my ("FRAME").';
$strNoIndex = '��dn� index nebyl definov�n!';
$strNoIndexPartsDefined = '��dn� ��st indexu nebyla definov�na!';
$strNoModification = '��dn� zm�na';
$strNoPassword = '��dn� heslo';
$strNoPhp = 'Bez PHP k�du';
$strNoPrivileges = 'Nem�te opr�vn�n�';
$strNoQuery = '��dn� SQL dotaz!';
$strNoRights = 'Nem�te dostate�n� pr�va na proveden� t�to akce!';
$strNoTablesFound = 'V&nbsp;datab�zi nebyla nalezena ani jedna tabulka.';
$strNoUsersFound = '��dn� u�ivatel nenalezen.';
$strNoValidateSQL = 'Bez kontroly SQL';
$strNone = '��dn�';
$strNotNumber = 'Toto nen� ��slo!';
$strNotOK = 'nen� OK';
$strNotSet = '<b>%s</b> tabulka nenalezena nebo nen� nastavena v&nbsp;%s';
$strNotValidNumber = ' nen� platn� ��slo ��dku!';
$strNull = 'Nulov�';
$strNumSearchResultsInTable = '%s odpov�daj�c�(ch) z�znam(�) v&nbsp;tabulce <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkem:</b> <i>%s</i> odpov�daj�c�(ch) z�znam(�)';
$strNumTables = 'Tabulek';

$strOK = 'OK';
$strOftenQuotation = '�asto uvozuj�c� znaky. Voliteln� znamen�, �e pouze polo�ky u kter�ch je to nutn� (obvykle typu CHAR a VARCHAR) jsou uzav�eny do uzav�rac�ch znak�.';
$strOperations = '�pravy';
$strOptimizeTable = 'Optimalizovat tabulku';
$strOptionalControls = 'Voliteln�. Ur�uje jak zapisovat nebo ��st speci�ln� znaky.';
$strOptionally = 'Voliteln�';
$strOptions = 'Vlastnosti';
$strOr = 'nebo';
$strOverhead = 'Nav�c';

$strPHP40203 = 'Pou��v�te PHP 4.2.3, kter� m� z�va�nou chybu p�i pr�ci s&nbsp;v�cebajtov�mi znaky (mbsting), jedn� se o&nbsp;chybu PHP ��slo 19404. Nedoporu�ujeme pou��vat tuto verzi PHP s&nbsp;phpMyAdminem.';
$strPHPVersion = 'Verze PHP';
$strPageNumber = 'Strana ��slo:';
$strPartialText = 'Zkr�cen� texty';
$strPassword = 'Heslo';
$strPasswordEmpty = 'Heslo je pr�zdn�!';
$strPasswordNotSame = 'Hesla nejsou stejn�!';
$strPdfDbSchema = 'Sch�ma datab�ze "%s" - Strana %s';
$strPdfInvalidPageNum = 'Nedefinovan� ��slo str�nky v&nbsp;PDF!';
$strPdfInvalidTblName = 'Tabulka "%s" neexistuje!';
$strPdfNoTables = '��dn� tabulky';
$strPerHour = 'za hodinu';
$strPhp = 'Zobrazit PHP k�d';
$strPmaDocumentation = 'Dokumentace phpMyAdmina';
$strPmaUriError = 'Parametr <tt>$cfg[\'PmaAbsoluteUri\']</tt> MUS� b�t nastaven v&nbsp;konfigura�n�m souboru!';
$strPortrait = 'Na v��ku';
$strPos1 = 'Za��tek';
$strPrevious = 'P�edchoz�';
$strPrimary = 'Prim�rn�';
$strPrimaryKey = 'Prim�rn� kl��';
$strPrimaryKeyHasBeenDropped = 'Prim�rn� kl�� byl odstran�n';
$strPrimaryKeyName = 'Jm�no prim�rn�ho kl��e mus� b�t "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mus�</b> b�t jm�no <b>pouze</b> prim�rn�ho kl��e!)';
$strPrint = 'Vytisknout';
$strPrintView = 'N�hled k vyti�t�n�';
$strPrivDescAllPrivileges = 'V�echna opr�vn�n� krom� GRANT.';
$strPrivDescAlter = 'Umo��uje m�nit strukturu existuj�c�ch tabulek.';
$strPrivDescCreateDb = 'Umo��uje vytv��et nov� datab�ze a tabulky.';
$strPrivDescCreateTbl = 'Umo��uje vytv��et nov� tabulky.';
$strPrivDescCreateTmpTable = 'Umo��uje vytv��et do�asn� tabulky.';
$strPrivDescDelete = 'Umo��uje mazat data.';
$strPrivDescDropDb = 'Umo��uje odstranit datab�ze a tabulky.';
$strPrivDescDropTbl = 'Umo��uje odstranit tabulky.';
$strPrivDescExecute = 'Umo�nuje spou�t�t ulo�en� procedury. V&nbsp;t�to verzi MySQL se nepou��v�.';
$strPrivDescFile = 'Umo��uje importovat a exportovat data z/do soubor� na serveru.';
$strPrivDescGrant = 'Umo��uje p�id�vat u�ivatele a opr�vn�n� bez znovuna��t�n� tabulek s&nbsp;opr�vn�n�mi.';
$strPrivDescIndex = 'Umo��uje vytv��et a ru�it indexy.';
$strPrivDescInsert = 'Umo��uje vkl�data a p�episovat data.';
$strPrivDescLockTables = 'Umo��uje zamknout tabulku pro aktu�ln� thread.';
$strPrivDescMaxConnections = 'Omez� po�et nov�ch p�ipojen�, kter� m��e u�ivatel vytvo�it za hodinu.';
$strPrivDescMaxQuestions = 'Omez� kolik dotaz� m��e u�ivatel odeslat serveru za hodinu.';
$strPrivDescMaxUpdates = 'Omez� kolik dotaz�, kter� m�n� nejakou tabulku nebo datab�zi, m��e u�ivatel spustit za hodinu.';
$strPrivDescProcess3 = 'Umo��uje zab�jet procesy jin�m u�ivatel�m.';
$strPrivDescProcess4 = 'Umo��uje vid�t kompletn� dotazy v&nbsp;seznamu proces�.';
$strPrivDescReferences = 'Nem� ��dn� vliv v&nbsp;t�to verzi MySQL.';
$strPrivDescReload = 'Umo��uje znovuna��t�n� nastaven� serveru a vypr�zdn�n� vyrovn�vac�ch pam�t� serveru.';
$strPrivDescReplClient = 'Umo�n� u�ivateli zjistit kde je hlavn� / pomocn� server.';
$strPrivDescReplSlave = 'Pot�ebn� pro replikaci pomocn�ch server�.';
$strPrivDescSelect = 'Umo��uje ��st data.';
$strPrivDescShowDb = 'D�v� p��stup k&nbsp;�pln�mu seznamu datab�z�.';
$strPrivDescShutdown = 'Umo��uje vypnout server.';
$strPrivDescSuper = 'Umo��uje p�ipojen� i kdy� je dosa�en maxim�ln� po�et p�ipojen�. Pot�ebn� pro v�t�inu operac� pro spr�vu serveru jako nastavov�n� glob�ln�ch prom�nn�ch a zab�jen� thread� jin�ch u�ivatel�.';
$strPrivDescUpdate = 'Umo��uje m�nit data.';
$strPrivDescUsage = '��dn� opr�vn�n�.';
$strPrivileges = 'Opr�vn�n�';
$strPrivilegesReloaded = 'Opr�vn�n� byla znovuna�tena �sp�n�.';
$strProcesslist = 'Seznam proces�';
$strProperties = 'Vlastnosti';
$strPutColNames = 'P�idat jm�na sloupc� na prvn� ��dek';

$strQBE = 'Dotaz';
$strQBEDel = 'smazat';
$strQBEIns = 'p�idat';
$strQueryOnDb = 'SQL dotaz na datab�zi <b>%s</b>:';
$strQueryStatistics = '<b>Statistika dotaz�</b>: Od spu�t�n� bylo serveru posl�no %s dotaz�.';
$strQueryType = 'Typ dotazu';

$strReType = 'Napsat znovu';
$strReceived = 'P�ijato';
$strRecords = 'Z�znam�';
$strReferentialIntegrity = 'Zkontrolovat integritu odkaz�:';
$strRelationNotWorking = 'N�kter� funkce pro pr�ci s&nbsp;propojen�mi tabulkami byly vypnuty. %sZde%s zjist�te pro�.';
$strRelationView = 'Zobrazit relace';
$strRelationalSchema = 'Rela�n� sch�ma';
$strReloadFailed = 'Znovuna�ten� MySQL selhalo.';
$strReloadMySQL = 'Znovuna�ten� MySQL';
$strRememberReload = 'Nezapome�te znovu na��st server.';
$strRenameTable = 'P�ejmenovat tabulku na';
$strRenameTableOK = 'Tabulka %s byla p�ejmenov�na na %s';
$strRepairTable = 'Opravit tabulku';
$strReplace = 'P�epsat';
$strReplaceTable = 'P�epsat data tabulky souborem';
$strReset = 'P�vodn� (reset)';
$strResourceLimits = 'Omezen� zdroj�';
$strRevoke = 'Zru�it';
$strRevokeGrant = 'Zru�it opr�vn�n� p�id�lovat pr�va';
$strRevokeGrantMessage = 'Bylo zru�eno opr�vn�n� p�id�lovat pr�va pro %s';
$strRevokeMessage = 'Byla zru�ena pr�va pro %s';
$strRevokePriv = 'Zru�it pr�va';
$strRowLength = 'D�lka ��dku';
$strRowSize = ' Velikost ��dku ';
$strRows = '��dk�';
$strRowsFrom = '��dk� za��naj�c� od';
$strRowsModeHorizontal = 'vodorovn�m';
$strRowsModeOptions = 've %s re�imu a opakovat hlavi�ky po %s ��dc�ch.';
$strRowsModeVertical = 'svisl�m';
$strRowsStatistic = 'Statistika ��dk�';
$strRunQuery = 'Prov�st dotaz';
$strRunSQLQuery = 'Spustit SQL dotaz(y) na datab�zi %s';
$strRunning = 'na %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Je mo�n�, �e jste na�li chybu v&nbsp;SQL parseru. Pros�m prozkoumejte podrobn� SQL dotaz, p�edev��m jestli jsou spr�vn� uvozovky a jestli nejsou proh�zen�. Dal�� mo�nost selh�n� je pokud nahr�v�te soubor s&nbsp;bin�rn�mi daty nezapsan�mi v&nbsp;uvozovk�ch. M��ete tak� vyzkou�et p��kazovou ��dku MySQL. N�e uveden� v�stup z&nbsp;MySQL serveru (pokud je n�jak�) V�m tak� m��e pomoci p�i zkoum�n� probl�mu. Pokud st�le m�te probl�my nebo pokud SQL parser ohl�s� chybu u dotazu, kter� na p��kazov� ��dce funguje, pros�m pokuste se zredukovat dotaz na co nejmen��, ve kter�m se probl�m je�t� vyskytne, a ohla�te chybu na str�nk�ch phpMyAdmina spolu se sekc� V�PIS uvedenou n�e:';
$strSQLParserUserError = 'Pravd�podobn� m�te v&nbsp;SQL dotazu chybu. N�e uveden� v�stup MySQL serveru (pokud je n�jak�) V�m tak� m��e pomoci p�i zkoum�n� probl�mu';
$strSQLQuery = 'SQL-dotaz';
$strSQLResult = 'V�sledek SQL dotazu';
$strSQPBugInvalidIdentifer = 'Chybn� identifik�tor';
$strSQPBugUnclosedQuote = 'Neuzav�en� uvozovky';
$strSQPBugUnknownPunctuation = 'Nezn�m� interpunk�n� znam�nko';
$strSave = 'Ulo�';
$strScaleFactorSmall = 'M���tko je p��li� mal�, aby se sch�ma ve�lo na jednu str�nku';
$strSearch = 'Vyhled�v�n�';
$strSearchFormTitle = 'Vyhled�v�n� v&nbsp;datab�zi';
$strSearchInTables = 'V&nbsp;tabulk�ch:';
$strSearchNeedle = 'Slova nebo hodnoty, kter� chcete vyhledat (z�stupn� znak: "%"):';
$strSearchOption1 = 'alespo� jedno ze slov';
$strSearchOption2 = 'v�echna slova';
$strSearchOption3 = 'p�esnou fr�zi';
$strSearchOption4 = 'jako regul�rn� v�raz';
$strSearchResultsFor = 'V�sledny vyhled�v�n� pro "<i>%s</i>" %s:';
$strSearchType = 'Naj�t:';
$strSelect = 'Vybrat';
$strSelectADb = 'Pros�m vyberte datab�zi';
$strSelectAll = 'Vybrat v�e';
$strSelectFields = 'Zvolte sloupec (alespo� jeden):';
$strSelectNumRows = 'v&nbsp;dotazu';
$strSelectTables = 'Vybrat tabulky';
$strSend = 'Poslat';
$strSent = 'Odesl�no';
$strServer = 'Server %s';
$strServerChoice = 'V�b�r serveru';
$strServerStatus = 'Stav serveru';
$strServerStatusUptime = 'Tento MySQL server be�� %s. Spu�t�n byl v&nbsp;%s.';
$strServerTabProcesslist = 'Procesy';
$strServerTabVariables = 'Prom�nn�';
$strServerTrafficNotes = '<b>Provoz serveru</b>: Informace o&nbsp;s�ov�m provozu MySQL serveru od jeho spu�t�n�.';
$strServerVars = 'Prom�nn� a nastaven� serveru';
$strServerVersion = 'Verze MySQL';
$strSessionValue = 'Hodnota sezen�';
$strSetEnumVal = 'Pokud je sloupec typu "enum" nebo "set", zad�vejte hodnoty v&nbsp;n�sleduj�c�m form�tu: \'a\',\'b\',\'c\'...<br />Pokud pot�ebujete zadat zp�tn� lom�tko ("\") nebo jednoduch� uvozovky ("\'") mezi t�mito hodnotami, napi�te p�ed n� zp�tn� lom�tko (p��klad: \'\\\\xyz\' nebo \'a\\\'b\').';
$strShow = 'Zobrazit';
$strShowAll = 'Zobrazit v�e';
$strShowColor = 'Barevn� �ipky';
$strShowCols = 'Zobrazit sloupce';
$strShowDatadictAs = 'Form�t datov�ho slovn�ku';
$strShowGrid = 'Zobrazit m��ku';
$strShowPHPInfo = 'Zobrazit informace o&nbsp;PHP';
$strShowTableDimension = 'Rozm�ry tabulek';
$strShowTables = 'Zobrazit tabulky';
$strShowThisQuery = 'Zobrazit zde tento dotaz znovu';
$strShowingRecords = 'Zobrazeny z�znamy';
$strSingly = '(po jednom)';
$strSize = 'Velikost';
$strSort = '�adit';
$strSpaceUsage = 'Vyu�it� m�sta';
$strSplitWordsWithSpace = 'Slova jsou odd�lena mezerou (" ").';
$strStatement = '�daj';
$strStatus = 'Stav';
$strStrucCSV = 'CSV data';
$strStrucData = 'Strukturu a data';
$strStrucDrop = 'P�idej \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV data pro MS Excel';
$strStrucOnly = 'Pouze strukturu';
$strStructPropose = 'Navrhnout strukturu tabulky';
$strStructure = 'Struktura';
$strSubmit = 'Ode�li';
$strSuccess = 'V� SQL-dotaz byl �sp�n� vykon�n';
$strSum = 'Celkem';

$strTable = 'Tabulka';
$strTableComments = 'Koment�� k tabulce';
$strTableEmpty = 'Jm�no tabulky je pr�zdn�!';
$strTableHasBeenDropped = 'Tabulka %s byla odstran�na';
$strTableHasBeenEmptied = 'Tabulka %s byla vypr�zdn�na';
$strTableHasBeenFlushed = 'Vyrovn�vac� pam� pro tabulku %s byla vypr�zdn�na';
$strTableMaintenance = ' �dr�ba tabulky ';
$strTableOfContents = 'Obsah';
$strTableStructure = 'Struktura tabulky';
$strTableType = 'Typ tabulky';
$strTables = '%s tabulek';
$strTextAreaLength = 'Tento sloupec mo�n� nep�jde <br />(kv�li d�lce) upravit ';
$strTheContent = 'Obsah souboru byl vlo�en';
$strTheContents = 'Obsah souboru p�ep�e obsah zvolen� tabulky v&nbsp;t�ch ��dc�ch, kde je stejn� prim�rn� nebo unik�tn� kl��.';
$strTheTerminator = 'Sloupce jsou odd�leny t�mto znakem.';
$strThreadSuccessfullyKilled = 'Vl�kno %s bylo �sp�ne zabito.';
$strTime = '�as';
$strTotal = 'celkem';
$strTotalUC = 'Celkem';
$strTraffic = 'Provoz';
$strType = 'Typ';

$strUncheckAll = 'Od�krtnout v�e';
$strUnique = 'Unik�tn�';
$strUnselectAll = 'Odzna�it v�e';
$strUpdatePrivMessage = 'Byla aktualizovana opr�vn�n� pro %s.';
$strUpdateProfile = 'Zm�ny p��stupu:';
$strUpdateProfileMessage = 'P��stup byl zm�n�n.';
$strUpdateQuery = 'Aktualizovat dotaz';
$strUsage = 'Pou��v�';
$strUseBackquotes = 'Pou��t zp�tn� uvozovky u&nbsp;jmen tabulek a sloupc�';
$strUseTables = 'Pou��t tabulky';
$strUser = 'U�ivatel';
$strUserEmpty = 'Jm�no u�ivatele je pr�zdn�!';
$strUserName = 'Jm�no u�ivatele';
$strUserOverview = 'P�ehled u�ivatel�';
$strUsers = 'U�ivatel�';

$strValidateSQL = 'Zkontrolovat SQL';
$strValidatorError = 'SQL validator nemohl b�t inicializov�n. Pros�m zkontrolujte jestli m�te nainstalovan� pot�ebn� roz���en� php, jak je pops�no v&nbsp;%sdokumentaci%s.';
$strValue = 'Hodnota';
$strVar = 'Prom�nn�';
$strViewDump = 'Zobrazit v�pis (dump) tabulky';
$strViewDumpDB = 'Zobrazit v�pis (dump) datab�ze';

$strWebServerUploadDirectory = 'soubor z&nbsp;adres��e pro upload';
$strWebServerUploadDirectoryError = 'Adres�� ur�en� pro upload soubor� nemohl b�t otev�en';
$strWelcome = 'V�tej v&nbsp;%s';
$strWithChecked = 'Za�krtnut�:';
$strWrongUser = '�patn� u�ivatelsk� jm�no/heslo. P��stup odep�en.';

$strYes = 'Ano';

$strZeroRemovesTheLimit = 'Pozn�mka: Nastaven� t�chto parametr� na 0 (nulu) odstran� omezen�.';
$strZip = '"zazipov�no"';
// To translate

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
