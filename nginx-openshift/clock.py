import time
import logging
import sys

logging.basicConfig(stream=sys.stdout,
                    format='%(asctime)s %(message)s' )

logger=logging.getLogger()
logger.setLevel(logging.DEBUG)

while True:
  localtime = time.localtime()
  result = time.strftime("%I:%M:%S %p", localtime)
  print(result)
  logger.info("Just an information")
  time.sleep(1)
