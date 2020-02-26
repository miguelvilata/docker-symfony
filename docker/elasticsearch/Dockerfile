FROM elasticsearch:7.5.1

ENV xpack.security.enabled=false
ENV discovery.type=single-node
ENV bootstrap.memory_lock=true
ENV ES_JAVA_OPTS="-Xms2g -Xmx2g"

EXPOSE "9200:9200"
EXPOSE "9300:9300"