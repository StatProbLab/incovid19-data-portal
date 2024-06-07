###############################################################################
## Title: MatserClean                                                        ##
## Input: Multiple R files                                                   ##
## Output: Multiple files                                                    ##
## Date Modified: 22nd May 2024                                              ##
###############################################################################

# Set current working directory
setwd("/opt/lampp/htdocs/covid19-data-portal/Deceased_Working/wwwdec/")

source("cleaning.R")
print("Correct Dates and place")


source("masterFileClean.R")
print(" Clean Age Gender ")


source("dailyCleanCombine.R")
print(" Merge/Creating Master Clean")

source("finalDeceasedDataAgeGender.R")
print("Done Age Gender plots")


source("admissionfinal.R")
print("Done  DOA,DOD,POD graphs")


 source("symptomCluster.R")
print("Done Symptoms graphs")


source("descriptionCluster.R")
print("Done Description graphs")


source("comorbiditiesCluster.R")
print("Done Comorbidities graphs")


source("timeseriestesting.R")
print("Done testing graphs")

source("hospitalisation.R")
print("Done districtwise hospitalisaton graphs")

source("agewise_daystodecease.R")
print("Done age-wise days to decease graphs")


source("allerrors.R")
print("Done error file till date")


