<?php
/* $Id$ */

$charset = 'windows-1251';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('����', '��', '��', '��');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('ѳ�', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';

$timespanfmt = '%s ����, %s �����, %s ������ � %s ������';

$strAPrimaryKey = '���� ������ ��������� ���� �� %s';
$strAbortedClients = '���������';
$strAccessDenied = '������ ����������';
$strAction = 'ĳ�';
$strAddDeleteColumn = '������/������� ������� �������';
$strAddDeleteRow = '������/������� ����� �������';
$strAddNewField = '������ ���� ����';
$strAddPriv = '������ ��� ������';
$strAddPrivMessage = '���� ������ ����� �������';
$strAddSearchConditions = '������ ����� ������ (��� ��� ����� "where"):';
$strAddToIndex = '������ �� �������&nbsp;%s&nbsp;��������(�)';
$strAddUser = '������ ������ �����������';
$strAddUserMessage = '���� ������ ������ �����������.';
$strAffectedRows = '������ �����:';
$strAfter = 'ϳ��� %s';
$strAfterInsertBack = '�����������';
$strAfterInsertNewInsert = '�������� ����� �����';
$strAll = '���';
$strAllTableSameWidth = '���������� �� ������� �������� ������?';
$strAlterOrderBy = '������ ������� �������';
$strAnIndex = '���� ������ ������ ��� %s';
$strAnalyzeTable = '����� �������';
$strAnd = '�';
$strAny = '��������';
$strAnyColumn = '������� �������';
$strAnyDatabase = '������ ���� �����';
$strAnyHost = '�������� ����';
$strAnyTable = '������� �������';
$strAnyUser = '�������� ����������';
$strAscending = '����������';
$strAtBeginningOfTable = '�� ������� �������';
$strAtEndOfTable = '� ���� �������';
$strAttr = '��������';

$strBack = '�����';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' �������� ';
$strBinaryDoNotEdit = ' ������ ���� - �� ����������� ';
$strBookmarkDeleted = '�������� ���� ��������.';
$strBookmarkLabel = '̳���';
$strBookmarkQuery = '�������� �� SQL-�����';
$strBookmarkThis = '�������� �� ����� SQL-�����';
$strBookmarkView = '���� ��������';
$strBrowse = '�����������';
$strBzError = 'phpMyAdmin �� ���� ������������� dump ����� ���������� Bz2 ���������� � ��� ���� PHP. ����������� ���������� ���������� � ���������������� ���� ������ phpMyAdmin ��������� <code>$cfg[\'BZipDump\']</code> �� <code>FALSE</code>. ���� �� ������ ��������������� ��������� Bz2 �������������, ��� ��������� �������� ����� PHP. ���. ���������� � ������������ ��� ������� %s.';
$strBzip = '���������� � "bzip"';

$strCannotLogin = '�� ���� �������������� �� MySQL ������';
$strCantLoadMySQL = '���������� MySQL �� �����������,<br />�������� ������������ PHP.';
$strCantLoadRecodeIconv = '�� ���� ����������� iconv �� recode extension ��������� ��� ���� charset-�, ������������� php ���, ��� ����� ���� ��������������� �� extensions, ��� ���������� ���� charset-� � phpMyAdmin.';
$strCantRenameIdxToPrimary = '��������� ������������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�� ����  ����������� ��/��� iconv, ��/��� libiconv, ��/��� ������� recode_string ���� ���� ����������� extension reports. �������� ���� php ������������.';
$strCardinality = 'ʳ������ ��������';
$strCarriage = '���������� �������: \\r';
$strChange = '������';
$strChangeDisplay = '������� ���� ��� �����������';
$strChangePassword = '������ ������';
$strCharsetOfFile = '��������� �����:';
$strCheckAll = '³������ ���';
$strCheckDbPriv = '��������� ������ ���� �����';
$strCheckTable = '��������� �������';
$strChoosePage = '����� ������� ������� ��� �����������';
$strColComFeat = '���������� �������� ��������';
$strColumn = '�������';
$strColumnNames = '����� �������';
$strCommand = '�������';
$strComments = '��������';
$strCompleteInserts = '����� �������';
$strConfigFileError = 'phpMyAdmin �� ���� ��������� ��������������� ���� <br />�� ���� ������� � ���� �������, ���� php ��������� �� ����������� ������� (parse error) � �����, ��� �� ���� ������ ������ �����.<br />���������� ��������������� ���� ������������� �� ��������� ��������� �������� ����� � ���������� �������� ����������� ��� ������� (php error messages). ��������� ���� � ���� ������ ����� ����� �� ���������.  <br />���� �� �������� ������� �������, - ������� ��� � �������.';
$strConfigureTableCoord = '����� �������������� ���������� ������� %s';
$strConfirm = '�� �������� ������ �� �������?';
$strConnections = '�\'������';
$strCookiesRequired = '� ����� ������� Cookies ������� ���� ���������.';
$strCopyTable = '��������� ������� � (���� �����<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� ���������� � %s.';
$strCouldNotKill = 'phpMyAdmin �� ���� ��������� ������ %s. ³� ��� ������� ��� ���������.';
$strCreate = '��������';
$strCreateIndex = '�������� ������ ��&nbsp;%s&nbsp;��������';
$strCreateIndexTopic = '�������� ����� ������';
$strCreateNewDatabase = '�������� ���� ��';
$strCreateNewTable = '�������� ���� ������� � �� %s';
$strCreatePage = '�������� ���� �������';
$strCreatePdfFeat = '�������� PDF-����';
$strCriteria = '�������';

$strData = '����';
$strDataDict = '������� �����';
$strDataOnly = '���� ����';
$strDatabase = '�� ';
$strDatabaseHasBeenDropped = '���� ����� %s �������.';
$strDatabaseWildcard = '���� ����� (��������� ������������ ��������):';
$strDatabases = '���� �����';
$strDatabasesStats = '���������� ��� �����';
$strDefault = '�� ������������';
$strDelete = '��������';
$strDeleteFailed = '��������� �� �������!';
$strDeleteUserMessage = '�������� ����������� %s.';
$strDeleted = '����� ��������';
$strDeletedRows = '�������� �������� �����:';
$strDescending = '���������';
$strDisabled = '�����������';
$strDisplay = '��������';
$strDisplayFeat = '�������� ���������';
$strDisplayOrder = '������� ���������:';
$strDisplayPDF = '�������� PDF �����';
$strDoAQuery = '�������� "����� ����� ��������" (������ �����������: "%")';
$strDoYouReally = '�� �������� ������ ';
$strDocu = '������������';
$strDrop = '�������';
$strDropDB = '������� �� %s';
$strDropTable = '�������� �������';
$strDumpXRows = 'Ǵ��������� ���� %s ����� ��������� � %s -��.';
$strDumpingData = '���� ����� �������';
$strDynamic = '���������';

$strEdit = '����������';
$strEditPDFPages = '���������� PDF �������';
$strEditPrivileges = '����������� �������';
$strEffective = '������������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ��������� ������ ��������� (����� ���� �����).';
$strEnabled = '���������';
$strEnd = 'ʳ����';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' ����������: ������ MySQL ��������� ��-��������� ';
$strError = '�������';
$strExplain = '��������� SQL';
$strExport = '�������';
$strExportToXML = '������������ � XML ������';
$strExtendedInserts = '��������� �������';
$strExtra = '���������';

$strFailedAttempts = '�������� �����';
$strField = '����';
$strFieldHasBeenDropped = '���� %s ���� ��������';
$strFields = '����';
$strFieldsEmpty = ' �������� ������ ����! ';
$strFieldsEnclosedBy = '���� ����� �';
$strFieldsEscapedBy = '���� �����������';
$strFieldsTerminatedBy = '���� ��������';
$strFixed = '����������';
$strFlushTable = '�������� ��� ������� ("FLUSH")';
$strFormEmpty = '�� ������ �������� ��� �����!';
$strFormat = '������';
$strFullText = '����� ������';
$strFunction = '�������';

$strGenBy = '�����������';
$strGenTime = '��� ���������';
$strGeneralRelationFeat = '�������� ���������';
$strGlobalValue = '�������� ��������';
$strGo = '������';
$strGrants = '�����';
$strGzip = '���������� � "gzip"';

$strHasBeenAltered = '���� ������.';
$strHasBeenCreated = '���� ��������.';
$strHaveToShow = '��������� ������� ������� ���� �������� ��� ������';
$strHome = '�� �������';
$strHomepageOfficial = '�������� ������� phpMyAdmin';
$strHomepageSourceforge = '������������ phpMyAdmin � Sourceforge';
$strHost = '����';
$strHostEmpty = '������� ��\'� �����!';

$strId = 'ID';
$strIdxFulltext = '���������';
$strIfYouWish = '���� �� ������ ����������� ���� ���� ������� �������, ������� ��������� ������ ������ ����.';
$strIgnore = '������������';
$strImportDocSQL = '����������� docSQL �����';
$strInUse = '���������������';
$strIndex = '������';
$strIndexHasBeenDropped = '������ %s ���� �������';
$strIndexName = '����� �������&nbsp;:';
$strIndexType = '��� �������&nbsp;:';
$strIndexes = '�������';
$strInsecureMySQL = '��� ���� ������������ ������ ��������� (root ��� ������) �� ���������� �������������� ����������� MySQL. ��� MySQL ������ � ����� ������� �������� ��� ���������� � ���� ��� ����\'������ ��� ��������� �� ��������� � �������.';
$strInsert = '��������';
$strInsertAsNewRow = '�������� �� ����� �����';
$strInsertNewRow = '�������� ����� �����';
$strInsertTextfiles = '�������� ������� ����� � �������';
$strInsertedRows = '������ �����:';
$strInstructions = '����������';
$strInvalidName = '"%s" - ������������� �����, �� �� ������ ��������������� ���� ��� ����� ���� �����/�������/����.';

$strKeepPass = '�� �������� ������';
$strKeyname = '��\'� �����';
$strKill = '�����';

$strLaTeX = 'LaTeX';
$strLandscape = 'Landscape';
$strLength = '�������';
$strLengthSet = '�������/��������*';
$strLimitNumRows = '������ �� �������';
$strLineFeed = '������ ���� �����: \\n';
$strLines = '�����';
$strLinesTerminatedBy = '����� ��������';
$strLinkNotFound = '˳�� �� ��������';
$strLinksTo = '˳��� ��';
$strLocationTextfile = '������ ������������ ���������� �����';
$strLogPassword = '������:';
$strLogUsername = '��\'� �����������:';
$strLogin = '���� � �������';
$strLogout = '����� � �������';

$strMissingBracket = '����� �����';
$strModifications = '����������� ���� ���������';
$strModify = '������';
$strModifyIndexTopic = '������ ������';
$strMoreStatusVars = '�������� �������� �����';
$strMoveTable = '��������� ������� � (���� �����<b>.</b>�������):';
$strMoveTableOK = '������� %s ���� ���������� � %s.';
$strMySQLCharset = 'MySQL Charset';
$strMySQLReloaded = 'MySQL ���������������.';
$strMySQLSaid = '³������ MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �� %pma_s2% �� %pma_s3%';
$strMySQLShowProcess = '�������� �������';
$strMySQLShowStatus = '�������� ���� MySQL';
$strMySQLShowVars = '�������� �������� ����� MySQL';

$strName = '�����';
$strNext = '������';
$strNo = 'ͳ';
$strNoDatabases = '�� �������';
$strNoDescription = '��� �����';
$strNoDropDatabases = '��������� "DROP DATABASE" ����������.';
$strNoExplain = '�� ��������� SQL';
$strNoFrames = '��� ������ phpMyAdmin ������� ������� � ��������� <b>������</b>.';
$strNoIndex = '������ �� ���������!';
$strNoIndexPartsDefined = '�� ��������� ������� �������!';
$strNoModification = '��� ����';
$strNoPassword = '��� ������';
$strNoPhp = '��� PHP ����';
$strNoPrivileges = '��� �������';
$strNoQuery = '�� ������ SQL-�����!';
$strNoRights = '�� ��� ����� ���� ����������� ����!';
$strNoTablesFound = '� �� �� �������� �������.';
$strNoUsersFound = '�� �������� �����������.';
$strNoValidateSQL = '�� ��������� SQL';
$strNone = '����';
$strNotNumber = '�� �� �����!';
$strNotOK = '�� OK';
$strNotSet = '������� <b>%s</b> �� �������� ��� �� ��������� � %s';
$strNotValidNumber = ' ����������� ������� �����!';
$strNull = '����';
$strNumSearchResultsInTable = '%s ��������� � ������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�����:</b> <i>%s</i> ���������';
$strNumTables = '�������';

$strOK = 'OK';
$strOftenQuotation = '�������� �����. �� ������ ������, �� ���� ���� char � varchar �������� � �����.';
$strOperations = '��������';
$strOptimizeTable = '����������� �������';
$strOptionalControls = '�� ������. ��������� ������� �� ��������� ����������� �������.';
$strOptionally = '�� ������';
$strOptions = '���������';
$strOr = '���';
$strOverhead = '������� �������';

$strPHP40203 = '�� ������������� ����� PHP 4.2.3, ��� �� �������� ������� ��� ����� � multi-byte strings (mbstring). ��� PHP bug report 19404. �� ����� PHP �� ������������� ��������������� � phpMyAdmin.';
$strPHPVersion = '����� PHP';
$strPageNumber = '����� �������:';
$strPartialText = '������� ������';
$strPassword = '������';
$strPasswordEmpty = '�������� ������!';
$strPasswordNotSame = '����� �� �������!';
$strPdfDbSchema = '����� ���� ����� "%s" - ������� %s';
$strPdfInvalidPageNum = '�� ����������� ����� PDF �������!';
$strPdfInvalidTblName = '������� "%s" �� ����!';
$strPdfNoTables = '������� ����';
$strPerHour = '�� ������';
$strPhp = '�������� PHP ���';
$strPmaDocumentation = '������������ �� phpMyAdmin';
$strPmaUriError = '����� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������� ���� ����������� � ������ ���������������� ����!';
$strPortrait = 'Portrait';
$strPos1 = '�������';
$strPrevious = '�����';
$strPrimary = '���������';
$strPrimaryKey = '��������� ����';
$strPrimaryKeyHasBeenDropped = '��������� ���� ���� �������';
$strPrimaryKeyName = '��\'� ���������� ����� ������� ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>�������</b> ���� ������ <b>����</b> ���������� �����!)';
$strPrint = '����';
$strPrintView = '����� ��� �����';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivileges = '������';
$strProcesslist = '������ �������';
$strProperties = '����������';
$strPutColNames = '���� ����� ���� � ������� �����';

$strQBE = '����� ����� ��������';
$strQBEDel = '��������';
$strQBEIns = '��������';
$strQueryOnDb = 'SQL-����� �� �� <b>%s</b>:';
$strQueryStatistics = '<b>���������� ������</b>: � ������� �������, �� ������� ���� �������� %s ������.';
$strQueryType = '��� ������';

$strReType = 'ϳ�����������';
$strReceived = '��������';
$strRecords = '������';
$strReferentialIntegrity = '������ ��������� ����� �� ���� ��������:';
$strRelationNotWorking = '��������� ��������� ������ �� ������������ ��������� ������������. ��� ����, ��� ��������� ����, ��������� %s���%s.';
$strRelationView = '�������� �����������';
$strRelationalSchema = '����� ��\'����';
$strReloadFailed = '�� ������� ��������������� MySQL.';
$strReloadMySQL = '��������������� MySQL';
$strRememberReload = '�� �������� ��������������� ������.';
$strRenameTable = '������������� ������� �';
$strRenameTableOK = '������� %s ���� ������������� � %s';
$strRepairTable = '����������� �������';
$strReplace = '�������';
$strReplaceTable = '������� ���� ������� ������ � �����';
$strReset = '��������������';
$strRevoke = '³������';
$strRevokeGrant = '³������ ������� ����';
$strRevokeGrantMessage = '���� ������� ������� ���� ��� %s';
$strRevokeMessage = '�� ������ ������ ��� %s';
$strRevokePriv = '³������ ������';
$strRowLength = '������� �����';
$strRowSize = ' ����� ����� ';
$strRows = '�����';
$strRowsFrom = '����� �';
$strRowsModeHorizontal = ' ������������� ';
$strRowsModeOptions = '-�� %s � ��������� ��������� ����� ����� %s ����� ';
$strRowsModeVertical = ' ����������� ';
$strRowsStatistic = '���������� �����';
$strRunQuery = '�������� �����';
$strRunSQLQuery = '�������� SQL �����(�) �� �� %�';
$strRunning = '�� %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = '������� �� ������� ������� � ������ SQL. ����� ���������� ��������� �� �������� ���� � �� ��������� ����� � ������ �����. ����� �������� �������� ������� ���� ���� �� �� �� ����������� ���� � ��������� ������ ���������� ���� ������ � ����� �������. ��������� �������� ��� ����� �� ��������� �������� MySQL � �������� ������. ����������� MySQL ������� ��� ������� ������ ����� (���� � ����) ����� ���� ��������� ��� � ���������� ��������. ���� � ��� ��� �� ��������� �������� �� ������ ���� �������, � � �������� ������ ������ �����������, ����� ��������� ��� ������ SQL ����� �� ������ ������, ���� ������ � ������� ��������, � ������ ����������� ��� ������� � ������� ����� � ����� CUT �����:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. ����������� MySQL ������� ��� ������� ������ ����� (���� � ����) ����� ���� ��������� ��� � ���������� ��������.';
$strSQLQuery = 'SQL-�����';
$strSQLResult = 'SQL result';
$strSQPBugInvalidIdentifer = '����������� �������������';
$strSQPBugUnclosedQuote = '�� ������ �����';
$strSQPBugUnknownPunctuation = '�������� ������ ����������';
$strSave = '��������';
$strScaleFactorSmall = '������� ����� ������� ��� ����� ������� ���� �������';
$strSearch = '������';
$strSearchFormTitle = '������ � ��� �����';
$strSearchInTables = '��������� �������:';
$strSearchNeedle = '����� �� ��������, �� ������� ������ (�����: "%"):';
$strSearchOption1 = '������� ���� � ���';
$strSearchOption2 = '�� �����';
$strSearchOption3 = '����� �����';
$strSearchOption4 = '���������� �����';
$strSearchResultsFor = '���������� ������ "<i>%s</i>" %s:';
$strSearchType = '������:';
$strSelect = '�������';
$strSelectADb = '����� ������� ��';
$strSelectAll = '³������ ���';
$strSelectFields = '������� ���� (���������� ����):';
$strSelectNumRows = '�� ������';
$strSelectTables = '������� �������';
$strSend = '³������';
$strSent = '³���������';
$strServer = '������ %s';
$strServerChoice = '���� �������';
$strServerStatus = '���������� ��� ������ �������';
$strServerStatusUptime = '��� MySQL ������ ������ %s. ��������� %s.';
$strServerTabProcesslist = '�������';
$strServerTabVariables = '�����';
$strServerTrafficNotes = '<b>������ �������</b>: ������� ��������� ���������� ������������ ����� ��� MySQL �������� � ������� ���� �������.';
$strServerVars = '����� ������� �� ������������';
$strServerVersion = '����� �������';
$strSessionValue = '�������� ���';
$strSetEnumVal = '��� ���� ���� "enum" �� "set", ������ �������� ����� ������ �������: \'a\',\'b\',\'c\'...<br />���� ��� ���� ������� ������ �������� ���� ����� ("\"") ��� �������� ����� ("\'") ������� ��� �������, �������� ����� ���� �������� ���� ����� (���������, \'\\\\xyz\' �� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ���';
$strShowColor = '�������� ����';
$strShowCols = '�������� �������';
$strShowDatadictAs = '������ ��������';
$strShowGrid = '�������� ����';
$strShowPHPInfo = '�������� ���������� ��� PHP';
$strShowTableDimension = '�������� ������ �������';
$strShowTables = '�������� �������';
$strShowThisQuery = ' �������� ����� ����� ����� ';
$strShowingRecords = '�������� ������ ';
$strSingly = '(������)';
$strSize = '�����';
$strSort = '�����������';
$strSpaceUsage = '������, �� ���������������';
$strSplitWordsWithSpace = '����� �������� ������� (" ").';
$strStatement = '��������';
$strStatus = '������';
$strStrucCSV = 'CSV ����';
$strStrucData = '��������� � ����';
$strStrucDrop = '������ ��������� �������';
$strStrucExcelCSV = 'CSV ��� ����� MS Excel';
$strStrucOnly = '���� ���������';
$strStructPropose = '������������� ��������� �������';
$strStructure = '���������';
$strSubmit = '��������';
$strSuccess = '��� SQL-����� ���� ������ ��������';
$strSum = '������';

$strTable = '������� ';
$strTableComments = '�������� �� �������';
$strTableEmpty = '������� ����� �������!';
$strTableHasBeenDropped = '������� %s ���� �������';
$strTableHasBeenEmptied = '������� %s ���� �������';
$strTableHasBeenFlushed = '���� ������� ��� ������� %s';
$strTableMaintenance = '������������� �������';
$strTableOfContents = '����';
$strTableStructure = '��������� �������';
$strTableType = '��� �������';
$strTables = '%s ������(�)';
$strTextAreaLength = ' ����� ������ �������,<br /> �� ���� �� ���� ���� ������������ ';
$strTheContent = '���� ����� ���� �����������.';
$strTheContents = '���� ����� ������ ���� ������� ��� ����� � ����������� ��������� ��� ����������� �������.';
$strTheTerminator = '������ ��������� ����.';
$strThreadSuccessfullyKilled = '������ %s ���������.';
$strTime = '���';
$strTotal = '������';
$strTotalUC = '�����';
$strTraffic = '������';
$strType = '���';

$strUncheckAll = '����� �� ������';
$strUnique = '���������';
$strUnselectAll = '����� �� ������';
$strUpdatePrivMessage = '���� ������ ������ ���';
$strUpdateProfile = '�������� �������:';
$strUpdateProfileMessage = '������� ���� ���������.';
$strUpdateQuery = '��������� �����';
$strUsage = '������������';
$strUseBackquotes = '�������� ����� � ������ ������� � ����';
$strUseTables = '��������������� �������';
$strUser = '����������';
$strUserEmpty = '������� �\'�� �����������!';
$strUserName = '��\'� �����������';
$strUsers = '�����������';

$strValidateSQL = '��������� SQL';
$strValidatorError = '�� ���� ��������� �������� SQL. ����� ��������������� �� ������������� ��������� php extensions �� ������� � %s������������%s.';
$strValue = '��������';
$strVar = '�����';
$strViewDump = '����������� ���� (�����) �������';
$strViewDumpDB = '����������� ���� (�����) ��';

$strWebServerUploadDirectory = '������� ���-������� ��� ������������ ����� (upload directory)';
$strWebServerUploadDirectoryError = '������������ ���� ������� ��� ������������ ����� �����������';
$strWelcome = '������� ������� �� %s';
$strWithChecked = '� ���������:';
$strWrongUser = '������� ����/������. ������ �� ���������.';

$strYes = '���';

$strZip = '���������� � "zip"';
// To translate

$strAdministration = 'Administration'; //to translate

$strCompression = 'Compression'; //to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate

$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate

$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate

$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate
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
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate

$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate

$strUserOverview = 'User overview'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate

$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate
$strOriginalInterface = 'original interface';  //to translate
?>
