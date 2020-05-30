        <requiresHypervisorSupport>true</requiresHypervisorSupport>
        <installerFile>
          <fileSize>772022512</fileSize>
          <installSize>831446363</installSize>
          <installerURL>http://go.microsoft.com/fwlink/?LinkID=690354</installerURL>
          <burnBundle>
            <usesVisualStudioUX>true</usesVisualStudioUX>
          </burnBundle>
        </installerFile>
        <installCommands>
          <cmdline>
            <exe>%InstallerFile%</exe>
            <commandLineArguments>/quiet /norestart</commandLineArguments>
            <returnCodeMappings>
              <mapping>
                <returnCode>-2147185721</returnCode>
                <successDelayedRebootRequired>
                  <detailedInformation>The installation was successful and the computer needs to be restarted.</detailedInformation>
                </successDelayedRebootRequired>
              </mapping>
            </returnCodeMappings>
          </cmdline>
        </installCommands>
        <repairComma