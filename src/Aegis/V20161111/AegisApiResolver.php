<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Aegis based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Aegis\V20161111
 *
 * @method AegisApiResolver aegisApiResolver(array $options = [])
 * @method AutoUpgradeSas autoUpgradeSas(array $options = [])
 * @method BatchDeleteWhiteList batchDeleteWhiteList(array $options = [])
 * @method CreateCondition createCondition(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateLogQuery createLogQuery(array $options = [])
 * @method CreateOrUpdateGroup createOrUpdateGroup(array $options = [])
 * @method CreateOrUpdateRule createOrUpdateRule(array $options = [])
 * @method CreateSuspiciousExport createSuspiciousExport(array $options = [])
 * @method CreateTypeWhiteList createTypeWhiteList(array $options = [])
 * @method CreateUserSetting createUserSetting(array $options = [])
 * @method CreateUserWhiteList createUserWhiteList(array $options = [])
 * @method DeleteCondition deleteCondition(array $options = [])
 * @method DeleteCustomizeReport deleteCustomizeReport(array $options = [])
 * @method DeleteLogQuery deleteLogQuery(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method DeleteRuleGroup deleteRuleGroup(array $options = [])
 * @method DeleteSearchCondition deleteSearchCondition(array $options = [])
 * @method DeleteStrategy deleteStrategy(array $options = [])
 * @method DescribeAlarmEventDetail describeAlarmEventDetail(array $options = [])
 * @method DescribeAlarmEventList describeAlarmEventList(array $options = [])
 * @method DescribeAllRegionsStatistics describeAllRegionsStatistics(array $options = [])
 * @method DescribeApiBuySummary describeApiBuySummary(array $options = [])
 * @method DescribeAssetDetailByUuid describeAssetDetailByUuid(array $options = [])
 * @method DescribeAssetList describeAssetList(array $options = [])
 * @method DescribeAssetSummary describeAssetSummary(array $options = [])
 * @method DescribeAttackAnalysisData describeAttackAnalysisData(array $options = [])
 * @method DescribeBuySummary describeBuySummary(array $options = [])
 * @method DescribeConcernNecessity describeConcernNecessity(array $options = [])
 * @method DescribeCustomizeReportChartData describeCustomizeReportChartData(array $options = [])
 * @method DescribeCustomizeReportChartList describeCustomizeReportChartList(array $options = [])
 * @method DescribeCustomizeReportConfigDetail describeCustomizeReportConfigDetail(array $options = [])
 * @method DescribeCustomizeReportList describeCustomizeReportList(array $options = [])
 * @method DescribeDataSource describeDataSource(array $options = [])
 * @method DescribeEmgNotice describeEmgNotice(array $options = [])
 * @method DescribeEmgUserAgreement describeEmgUserAgreement(array $options = [])
 * @method DescribeEmgVulGroup describeEmgVulGroup(array $options = [])
 * @method DescribeEventCountCurve describeEventCountCurve(array $options = [])
 * @method DescribeEventLevelCount describeEventLevelCount(array $options = [])
 * @method DescribeExportInfo describeExportInfo(array $options = [])
 * @method DescribeFilterFields describeFilterFields(array $options = [])
 * @method DescribeGroupList describeGroupList(array $options = [])
 * @method DescribeHistogram describeHistogram(array $options = [])
 * @method DescribeHostTotalCount describeHostTotalCount(array $options = [])
 * @method DescribeHostWafs describeHostWafs(array $options = [])
 * @method DescribeHosts describeHosts(array $options = [])
 * @method DescribeInstanceStatistics describeInstanceStatistics(array $options = [])
 * @method DescribeLogInfo describeLogInfo(array $options = [])
 * @method DescribeLogItems describeLogItems(array $options = [])
 * @method DescribeLogMeta describeLogMeta(array $options = [])
 * @method DescribeLogQuery describeLogQuery(array $options = [])
 * @method DescribeLogShipperStatus describeLogShipperStatus(array $options = [])
 * @method DescribeLoginLogs describeLoginLogs(array $options = [])
 * @method DescribeMacConfig describeMacConfig(array $options = [])
 * @method DescribeMachineConfig describeMachineConfig(array $options = [])
 * @method DescribeNsasSuspEventType describeNsasSuspEventType(array $options = [])
 * @method DescribeOperateInfo describeOperateInfo(array $options = [])
 * @method DescribePropertyScheduleConfig describePropertyScheduleConfig(array $options = [])
 * @method DescribePropertyUserDetail describePropertyUserDetail(array $options = [])
 * @method DescribeQuaraFile describeQuaraFile(array $options = [])
 * @method DescribeRiskType describeRiskType(array $options = [])
 * @method DescribeRiskWhiteList describeRiskWhiteList(array $options = [])
 * @method DescribeRisks describeRisks(array $options = [])
 * @method DescribeRuleList describeRuleList(array $options = [])
 * @method DescribeSasAssetStatistics describeSasAssetStatistics(array $options = [])
 * @method DescribeSasAssetStatisticsColumn describeSasAssetStatisticsColumn(array $options = [])
 * @method DescribeSasLeftCondition describeSasLeftCondition(array $options = [])
 * @method DescribeSearchCondition describeSearchCondition(array $options = [])
 * @method DescribeSecurityStatInfo describeSecurityStatInfo(array $options = [])
 * @method DescribeStrategy describeStrategy(array $options = [])
 * @method DescribeStrategyExecDetail describeStrategyExecDetail(array $options = [])
 * @method DescribeStrategyTarget describeStrategyTarget(array $options = [])
 * @method DescribeStratety describeStratety(array $options = [])
 * @method DescribeStratetyDetail describeStratetyDetail(array $options = [])
 * @method DescribeSummaryInfo describeSummaryInfo(array $options = [])
 * @method DescribeSuspEventDetail describeSuspEventDetail(array $options = [])
 * @method DescribeSuspEventExportInfo describeSuspEventExportInfo(array $options = [])
 * @method DescribeSuspEventQuaraFiles describeSuspEventQuaraFiles(array $options = [])
 * @method DescribeSuspEventTypes describeSuspEventTypes(array $options = [])
 * @method DescribeSuspEventUserSetting describeSuspEventUserSetting(array $options = [])
 * @method DescribeSuspEvents describeSuspEvents(array $options = [])
 * @method DescribeSuspTrendStatistics describeSuspTrendStatistics(array $options = [])
 * @method DescribeSuspiciousEvents describeSuspiciousEvents(array $options = [])
 * @method DescribeSuspiciousExportInfo describeSuspiciousExportInfo(array $options = [])
 * @method DescribeSuspiciousOverallConfig describeSuspiciousOverallConfig(array $options = [])
 * @method DescribeSuspiciousUUIDConfig describeSuspiciousUUIDConfig(array $options = [])
 * @method DescribeTopRiskyAssets describeTopRiskyAssets(array $options = [])
 * @method DescribeTotalStatistics describeTotalStatistics(array $options = [])
 * @method DescribeUserSetting describeUserSetting(array $options = [])
 * @method DescribeUserTypeWhiteList describeUserTypeWhiteList(array $options = [])
 * @method DescribeUserWhiteList describeUserWhiteList(array $options = [])
 * @method DescribeUuidConfig describeUuidConfig(array $options = [])
 * @method DescribeUuidStatistics describeUuidStatistics(array $options = [])
 * @method DescribeVersionConfig describeVersionConfig(array $options = [])
 * @method DescribeVulDetails describeVulDetails(array $options = [])
 * @method DescribeVulList describeVulList(array $options = [])
 * @method DescribeVulnerabilitySummary describeVulnerabilitySummary(array $options = [])
 * @method DescribeWarning describeWarning(array $options = [])
 * @method DescribeWebLockBindList describeWebLockBindList(array $options = [])
 * @method DescribeWebLockConfigList describeWebLockConfigList(array $options = [])
 * @method DescribeWebLockEvents describeWebLockEvents(array $options = [])
 * @method DescribeWebLockMachineList describeWebLockMachineList(array $options = [])
 * @method DescribeWebLockStatus describeWebLockStatus(array $options = [])
 * @method DescribeWebshell describeWebshell(array $options = [])
 * @method DescribeYesterdayStatistics describeYesterdayStatistics(array $options = [])
 * @method Describesummary describesummary(array $options = [])
 * @method DownloadLog downloadLog(array $options = [])
 * @method ExecStrategy execStrategy(array $options = [])
 * @method ExportSuspEvents exportSuspEvents(array $options = [])
 * @method ExportWarning exportWarning(array $options = [])
 * @method GetAccountStatistics getAccountStatistics(array $options = [])
 * @method GetCrackStatistics getCrackStatistics(array $options = [])
 * @method GetEntityList getEntityList(array $options = [])
 * @method GetStatistics getStatistics(array $options = [])
 * @method GetStatisticsByUuid getStatisticsByUuid(array $options = [])
 * @method ModifyAssetGroup modifyAssetGroup(array $options = [])
 * @method ModifyBatchIgnoreVul modifyBatchIgnoreVul(array $options = [])
 * @method ModifyConcernNecessity modifyConcernNecessity(array $options = [])
 * @method ModifyEmgVulSubmit modifyEmgVulSubmit(array $options = [])
 * @method ModifyLogMetaStatus modifyLogMetaStatus(array $options = [])
 * @method ModifyMachineConfig modifyMachineConfig(array $options = [])
 * @method ModifyOpenLogShipper modifyOpenLogShipper(array $options = [])
 * @method ModifySasAssetStatisticsColumn modifySasAssetStatisticsColumn(array $options = [])
 * @method ModifySearchCondition modifySearchCondition(array $options = [])
 * @method ModifyStrategy modifyStrategy(array $options = [])
 * @method ModifyStrategyTarget modifyStrategyTarget(array $options = [])
 * @method ModifyWebLockCreateConfig modifyWebLockCreateConfig(array $options = [])
 * @method ModifyWebLockDeleteConfig modifyWebLockDeleteConfig(array $options = [])
 * @method ModifyWebLockMachineList modifyWebLockMachineList(array $options = [])
 * @method ModifyWebLockRefresh modifyWebLockRefresh(array $options = [])
 * @method ModifyWebLockStatus modifyWebLockStatus(array $options = [])
 * @method ModifyWebLockUpdateConfig modifyWebLockUpdateConfig(array $options = [])
 * @method OperateSuspiciousEvent operateSuspiciousEvent(array $options = [])
 * @method OperateSuspiciousOverallConfig operateSuspiciousOverallConfig(array $options = [])
 * @method OperateSuspiciousTargetConfig operateSuspiciousTargetConfig(array $options = [])
 * @method OperateWarning operateWarning(array $options = [])
 * @method OperateWebVul operateWebVul(array $options = [])
 * @method OperationCustomizeReportChart operationCustomizeReportChart(array $options = [])
 * @method OperationSuspEvents operationSuspEvents(array $options = [])
 * @method PushAllTask pushAllTask(array $options = [])
 * @method QueryCrackEvent queryCrackEvent(array $options = [])
 * @method QueryLoginEvent queryLoginEvent(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method RollbackQuaraFile rollbackQuaraFile(array $options = [])
 * @method RollbackSuspEventQuaraFile rollbackSuspEventQuaraFile(array $options = [])
 * @method SaveCustomizeReportConfig saveCustomizeReportConfig(array $options = [])
 * @method SaveSuspEventUserSetting saveSuspEventUserSetting(array $options = [])
 * @method TransformLeakage transformLeakage(array $options = [])
 * @method UpdateCustomizeReportStatus updateCustomizeReportStatus(array $options = [])
 * @method UpgradeInstance upgradeInstance(array $options = [])
 */
class AegisApiResolver
{
    use ApiResolverTrait;
}
